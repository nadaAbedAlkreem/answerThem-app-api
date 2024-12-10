<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Evaluation;
use App\Models\Question;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public  function  index (Request $request)
    {
        $ratingsByEvaluation = $this->analysisEvaluation() ;
        $categoryByLevel = $this->analysisCategory() ;
        $chartData = $this->analysisTrackUserEngagementRoundsOnApp() ;
        $formattedData = $this->analysisTrackCreationUserInApp();
        $totalRatings = Evaluation::count();
        $totalCategory = Category::count();
        $totalUser = User::count();
        $totalQuestions = Question::count();
        $lang = App::getLocale();

        return view('dashboard.pages.home' , compact('ratingsByEvaluation', 'chartData', 'totalQuestions','totalCategory' ,'categoryByLevel' ,'totalUser'  , 'formattedData','lang', 'totalRatings') );

    }

    private function analysisTrackCreationUserInApp()
    {
        $accountsCreatedByMonth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y')) // Current year
            ->groupBy('month')
            ->get();
        $formattedData = collect(range(1, 12))->map(function ($month) use ($accountsCreatedByMonth) {
            $data = $accountsCreatedByMonth->firstWhere('month', $month);
            return [
                'month' => $month,
                'total' => $data ? $data->total : 0,
            ];
        });
        return $formattedData ;

    }
    private function analysisTrackUserEngagementRoundsOnApp()
    {
        $challengesPerMonth = DB::table('challenges') // Replace 'challenges' with your table name
        ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupByRaw('MONTH(created_at)')
            ->orderBy('month')
            ->get();

         $chartData = $challengesPerMonth->mapWithKeys(function ($item) {
            return [Carbon::create()->month($item->month)->format('F') => $item->total];
        });

         return $chartData ;

    }
    private  function  analysisEvaluation()
    {
        $ratingsByEvaluation = Evaluation::select('descriptive_evaluation', DB::raw('COUNT(*) as count'))
            ->groupBy('descriptive_evaluation')
            ->get();

        return $ratingsByEvaluation ;

    }
    private  function  analysisCategory()
    {
        $levelMapping = [
            '1' => 'Primary',
            '2' => 'Secondary',
            '3' => 'Tertiary',
        ];

        $categoryByLevel = Category::select('level', DB::raw('COUNT(*) as count'))
            ->groupBy('level')
            ->get()
            ->map(function ($item) use ($levelMapping) {
                $item->level = $levelMapping[$item->level] ?? $item->level; // Replace level if it exists in mapping
                return $item;
            });

        return $categoryByLevel ;

    }
    private  function  lang($request){
        $lang = $request->route('lang');
        if ($lang) {
            $validLanguages = ['en','ar'];
            if (in_array($lang, $validLanguages)) {
                app()->setLocale($lang);
            } else {
                app()->setLocale('en');
            }
        }
    }
}
