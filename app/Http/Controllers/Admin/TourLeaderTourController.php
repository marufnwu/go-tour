<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gti;
use App\Models\City;
use App\Models\Tourleader;
use App\Models\Tourleadertour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TourLeaderTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tourleadertour::all();

        return view('admin.pages.tourleader_tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourleaders = Tourleader::all();
        $gtis = Gti::all();
        $cities = City::all();
        $languages = array(
            "Afrikaans",
            "Albanian - shqip",
            "Amharic - አማርኛ",
            "Arabic - العربية",
            "Aragonese - aragonés",
            "Armenian - հայերեն",
            "Asturian - asturianu",
            "Azerbaijani - azərbaycan dili",
            "Basque - euskara",
            "Belarusian - беларуская",
            "Bengali - বাংলা",
            "Bosnian - bosanski",
            "Breton - brezhoneg",
            "Bulgarian - български",
            "Catalan - català",
            "Central Kurdish - کوردی (دەستنوسی عەرەبی)",
            "Chinese - 中文",
            "Chinese (Hong Kong) - 中文（香港）",
            "Chinese (Simplified) - 中文（简体）",
            "Chinese (Traditional) - 中文（繁體）",
            "Corsican",
            "Croatian - hrvatski",
            "Czech - čeština",
            "Danish - dansk",
            "Dutch - Nederlands",
            "English",
            "English (Australia)",
            "English (Canada)",
            "English (India)",
            "English (New Zealand)",
            "English (South Africa)",
            "English (United Kingdom)",
            "English (United States)",
            "Esperanto - esperanto",
            "Estonian - eesti",
            "Faroese - føroyskt",
            "Filipino",
            "Finnish - suomi",
            "French - français",
            "French (Canada) - français (Canada)",
            "French (France) - français (France)",
            "French (Switzerland) - français (Suisse)",
            "Galician - galego",
            "Georgian - ქართული",
            "German - Deutsch",
            "German (Austria) - Deutsch (Österreich)",
            "German (Germany) - Deutsch (Deutschland)",
            "German (Liechtenstein) - Deutsch (Liechtenstein)",
            "German (Switzerland) - Deutsch (Schweiz)",
            "Greek - Ελληνικά",
            "Guarani",
            "Gujarati - ગુજરાતી",
            "Hausa",
            "Hawaiian - ʻŌlelo Hawaiʻi",
            "Hebrew - עברית",
            "Hindi - हिन्दी",
            "Hungarian - magyar",
            "Icelandic - íslenska",
            "Indonesian - Indonesia",
            "Interlingua",
            "Irish - Gaeilge",
            "Italian - italiano",
            "Italian (Italy) - italiano (Italia)",
            "Italian (Switzerland) - italiano (Svizzera)",
            "Japanese - 日本語",
            "Kannada - ಕನ್ನಡ",
            "Kazakh - қазақ тілі",
            "Khmer - ខ្មែរ",
            "Korean - 한국어",
            "Kurdish - Kurdî",
            "Kyrgyz - кыргызча",
            "Lao - ລາວ",
            "Latin",
            "Latvian - latviešu",
            "Lingala - lingála",
            "Lithuanian - lietuvių",
            "Macedonian - македонски",
            "Malay - Bahasa Melayu",
            "Malayalam - മലയാളം",
            "Maltese - Malti",
            "Marathi - मराठी",
            "Mongolian - монгол",
            "Nepali - नेपाली",
            "Norwegian - norsk",
            "Norwegian Bokmål - norsk bokmål",
            "Norwegian Nynorsk - nynorsk",
            "Occitan",
            "Oriya - ଓଡ଼ିଆ",
            "Oromo - Oromoo",
            "Pashto - پښتو",
            "Persian - فارسی",
            "Polish - polski",
            "Portuguese - português",
            "Portuguese (Brazil) - português (Brasil)",
            "Portuguese (Portugal) - português (Portugal)",
            "Punjabi - ਪੰਜਾਬੀ",
            "Quechua",
            "Romanian - română",
            "Romanian (Moldova) - română (Moldova)",
            "Romansh - rumantsch",
            "Russian - русский",
            "Scottish Gaelic",
            "Serbian - српски",
            "Serbo - Croatian",
            "Shona - chiShona",
            "Sindhi",
            "Sinhala - සිංහල",
            "Slovak - slovenčina",
            "Slovenian - slovenščina",
            "Somali - Soomaali",
            "Southern Sotho",
            "Spanish - español",
            "Spanish (Argentina) - español (Argentina)",
            "Spanish (Latin America) - español (Latinoamérica)",
            "Spanish (Mexico) - español (México)",
            "Spanish (Spain) - español (España)",
            "Spanish (United States) - español (Estados Unidos)",
            "Sundanese",
            "Swahili - Kiswahili",
            "Swedish - svenska",
            "Tajik - тоҷикӣ",
            "Tamil - தமிழ்",
            "Tatar",
            "Telugu - తెలుగు",
            "Thai - ไทย",
            "Tigrinya - ትግርኛ",
            "Tongan - lea fakatonga",
            "Turkish - Türkçe",
            "Turkmen",
            "Twi",
            "Ukrainian - українська",
            "Urdu - اردو",
            "Uyghur",
            "Uzbek - o‘zbek",
            "Vietnamese - Tiếng Việt",
            "Walloon - wa",
            "Welsh - Cymraeg",
            "Western Frisian",
            "Xhosa",
            "Yiddish",
            "Yoruba - Èdè Yorùbá",
            "Zulu - isiZulu"
        );
        return view('admin.pages.tourleader_tour.add', compact('tourleaders', 'gtis', 'cities','languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $valideData = $request->validate([
            'tour_code' => 'required | min:4 | numeric',
            'tour_cost' => 'required | numeric',
            'language' => 'required',
            'tourleader_id' => 'required',
            'gti_id' => 'required',
            'tour_name' => 'required',
            'athens_departure_date' => 'required',
            'passengers' => 'required | numeric',
        ]);
        $tours = new Tourleadertour();
        $tours->tourleader_id= $request ->input('tourleader_id');
        $tours->gti_id= $request ->input('gti_id');
        $tours->tour_name= $request->input('tour_name');
        $tours->athens_departure_date= $request->input('athens_departure_date');
        $tours->tour_cost= $request->input('tour_cost');
        $tours->language= $request->input('language');
        $tours->tour_code= $request->input('tour_code');
        $tours->passengers= $request->input('passengers');

        $tours->save();


        Session::flash('success', 'Tour Leader Tour has been Added Successfully');
        return Redirect::route('tourleader_tour.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tours = Tourleadertour::find($id);
        $gtis = Gti::all();
        $tourleaders = Tourleader::all();
        $languages = array(
            "Afrikaans",
            "Albanian - shqip",
            "Amharic - አማርኛ",
            "Arabic - العربية",
            "Aragonese - aragonés",
            "Armenian - հայերեն",
            "Asturian - asturianu",
            "Azerbaijani - azərbaycan dili",
            "Basque - euskara",
            "Belarusian - беларуская",
            "Bengali - বাংলা",
            "Bosnian - bosanski",
            "Breton - brezhoneg",
            "Bulgarian - български",
            "Catalan - català",
            "Central Kurdish - کوردی (دەستنوسی عەرەبی)",
            "Chinese - 中文",
            "Chinese (Hong Kong) - 中文（香港）",
            "Chinese (Simplified) - 中文（简体）",
            "Chinese (Traditional) - 中文（繁體）",
            "Corsican",
            "Croatian - hrvatski",
            "Czech - čeština",
            "Danish - dansk",
            "Dutch - Nederlands",
            "English",
            "English (Australia)",
            "English (Canada)",
            "English (India)",
            "English (New Zealand)",
            "English (South Africa)",
            "English (United Kingdom)",
            "English (United States)",
            "Esperanto - esperanto",
            "Estonian - eesti",
            "Faroese - føroyskt",
            "Filipino",
            "Finnish - suomi",
            "French - français",
            "French (Canada) - français (Canada)",
            "French (France) - français (France)",
            "French (Switzerland) - français (Suisse)",
            "Galician - galego",
            "Georgian - ქართული",
            "German - Deutsch",
            "German (Austria) - Deutsch (Österreich)",
            "German (Germany) - Deutsch (Deutschland)",
            "German (Liechtenstein) - Deutsch (Liechtenstein)",
            "German (Switzerland) - Deutsch (Schweiz)",
            "Greek - Ελληνικά",
            "Guarani",
            "Gujarati - ગુજરાતી",
            "Hausa",
            "Hawaiian - ʻŌlelo Hawaiʻi",
            "Hebrew - עברית",
            "Hindi - हिन्दी",
            "Hungarian - magyar",
            "Icelandic - íslenska",
            "Indonesian - Indonesia",
            "Interlingua",
            "Irish - Gaeilge",
            "Italian - italiano",
            "Italian (Italy) - italiano (Italia)",
            "Italian (Switzerland) - italiano (Svizzera)",
            "Japanese - 日本語",
            "Kannada - ಕನ್ನಡ",
            "Kazakh - қазақ тілі",
            "Khmer - ខ្មែរ",
            "Korean - 한국어",
            "Kurdish - Kurdî",
            "Kyrgyz - кыргызча",
            "Lao - ລາວ",
            "Latin",
            "Latvian - latviešu",
            "Lingala - lingála",
            "Lithuanian - lietuvių",
            "Macedonian - македонски",
            "Malay - Bahasa Melayu",
            "Malayalam - മലയാളം",
            "Maltese - Malti",
            "Marathi - मराठी",
            "Mongolian - монгол",
            "Nepali - नेपाली",
            "Norwegian - norsk",
            "Norwegian Bokmål - norsk bokmål",
            "Norwegian Nynorsk - nynorsk",
            "Occitan",
            "Oriya - ଓଡ଼ିଆ",
            "Oromo - Oromoo",
            "Pashto - پښتو",
            "Persian - فارسی",
            "Polish - polski",
            "Portuguese - português",
            "Portuguese (Brazil) - português (Brasil)",
            "Portuguese (Portugal) - português (Portugal)",
            "Punjabi - ਪੰਜਾਬੀ",
            "Quechua",
            "Romanian - română",
            "Romanian (Moldova) - română (Moldova)",
            "Romansh - rumantsch",
            "Russian - русский",
            "Scottish Gaelic",
            "Serbian - српски",
            "Serbo - Croatian",
            "Shona - chiShona",
            "Sindhi",
            "Sinhala - සිංහල",
            "Slovak - slovenčina",
            "Slovenian - slovenščina",
            "Somali - Soomaali",
            "Southern Sotho",
            "Spanish - español",
            "Spanish (Argentina) - español (Argentina)",
            "Spanish (Latin America) - español (Latinoamérica)",
            "Spanish (Mexico) - español (México)",
            "Spanish (Spain) - español (España)",
            "Spanish (United States) - español (Estados Unidos)",
            "Sundanese",
            "Swahili - Kiswahili",
            "Swedish - svenska",
            "Tajik - тоҷикӣ",
            "Tamil - தமிழ்",
            "Tatar",
            "Telugu - తెలుగు",
            "Thai - ไทย",
            "Tigrinya - ትግርኛ",
            "Tongan - lea fakatonga",
            "Turkish - Türkçe",
            "Turkmen",
            "Twi",
            "Ukrainian - українська",
            "Urdu - اردو",
            "Uyghur",
            "Uzbek - o‘zbek",
            "Vietnamese - Tiếng Việt",
            "Walloon - wa",
            "Welsh - Cymraeg",
            "Western Frisian",
            "Xhosa",
            "Yiddish",
            "Yoruba - Èdè Yorùbá",
            "Zulu - isiZulu"
        );
        return view('admin.pages.tourleader_tour.edit', compact('tours', 'gtis', 'tourleaders','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valideData = $request->validate([
            'tour_code' => 'required | min:4 | numeric',
            'tour_cost' => 'required | numeric',
            'language' => 'required',
            'tourleader_id' => 'required',
            'gti_id' => 'required',
            'tour_name' => 'required',
            'athens_departure_date' => 'required',
            'passengers' => 'required | numeric',
        ]);
        
        $tours = Tourleadertour::find($id);
        $tours->tourleader_id= $request ->input('tourleader_id');
        $tours->gti_id= $request ->input('gti_id');
        $tours->tour_name= $request->input('tour_name');
        $tours->athens_departure_date= $request->input('athens_departure_date');
        $tours->tour_cost= $request->input('tour_cost');
        $tours->language= $request->input('language');
        $tours->tour_code= $request->input('tour_code');
        $tours->passengers= $request->input('passengers');

        $tours->update();

        Session::flash('success', 'Tour Leader Tour has been Updated Successfully');
        return Redirect::route('tourleader_tour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tours = Tourleadertour::find($id);
        $tours -> delete();

        Session::flash('success', 'Tour Leader Tour has been Deleted Successfully');
        return Redirect::route('tourleader_tour.index');
    }
}
