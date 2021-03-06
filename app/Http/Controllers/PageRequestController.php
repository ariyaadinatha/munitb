<?php

namespace App\Http\Controllers;

use App\Mail\IndividualDelegateRegist;
use App\Mail\DelegationRegist;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Press;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing.landingIndex");
    }

    // ## -- 2. View Remark - Secgen 2020
    public function viewRemarkSecgen2020(){
        return view("landing.remark")->with('getString', 'secgen2020');
    }

    // ## -- 3. View Remark - GMUNC Advisor
    public function viewRemarkSecgenGmunc(){
        return view("landing.remark")->with('getString', 'gmunc');
    }

    // ## -- 4. View About
    public function viewAbout(){
        return view("about");
    }

    // ## -- 5. View Councils
    public function viewCouncils(){
        return view("councils.councilsIndex");
    }

    // ## -- 6. View Councils UNODC
    public function viewCouncilsUNODC(){
        return view("councils.UNODC");
    }

    // ## -- 7. View Councils UNEP
    public function viewCouncilsUNEP(){
        return view("councils.UNEP");
    }  

    // ## -- 8. View Councils WB
    public function viewCouncilsWB(){
        return view("councils.WB");
    }  

    // ## -- 9. View Councils UNW
    public function viewCouncilsUNW(){
        return view("councils.UNW");
    }  

    // ## -- 10. View Councils CRISIS
    public function viewCouncilsCRISIS(){
        return view("councils.CRISIS");
    }  

    // ## -- 11. View Councils UNSC
    public function viewCouncilsUNSC(){
        return view("councils.UNSC");
    }  

    // ## -- 12. View Councils UNCA
    public function viewCouncilsUNCA(){
        return view("councils.UNCA");
    }

    // ## -- 13. View Registration Page
    public function viewRegistrationLanding(){
        return view("registration.registrationLanding");
    }

    // ## -- 14. View Sponsors
    public function viewSponsors(){
        return view("sponsor.sponsorIndex");
    }

    // ## -- 14. View Sponsors Nutrifood
    public function viewSponsorsNutrifood(){
        return view("sponsor.nutrifoodIndex");
    }

    // ## -- 14. View Sponsors Les Lia
    public function viewSponsorsLembagaLesLia(){
        return view("sponsor.liaIndex");
    }

    // ## -- 14. View Sponsors Penjamin Simpanan
    public function viewSponsorsLembagaPenjaminSimpanan(){
        return view("sponsor.pinjamanIndex");
    }

    public function viewRegistrationInformation(){
        return view("registration.registrationInformation");
    }

    public function viewRegistrationPolicy(){
        return view("registration.registrationPolicy");
    }

    // ## -- 15. View test Page
    public function viewTest(){
        return view("test.database");
    }

    public function viewBlogTest() {
        return view("test.blog");
    }

    public function viewValidator(){
        return view("test.validator");
    }

    public function viewADT(){
        \Mail::to('hardyvalen@gmail.com')->send(new IndividualDelegateRegist);
        return view("emails.individualDelegateRegist");
    }

    public function viewRegistSent(){
        return view("registration.individualRegistSent");
    }

    public function viewHotelPage(){
        return view("landing.hotel");
    }

    public function viewPressIndex(){
        $posts = Press::orderBy('updated_at', 'desc')->paginate(4)->onEachSide(1);
        return view("press.pressIndex")->with('posts', $posts);
    }

    public function viewPress($id){
        $post = Press::find($id);
        return view("press.pressPost")->with('post', $post);
    }
}
