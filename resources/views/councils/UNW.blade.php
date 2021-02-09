@extends("template.main")

@section('title', 'Councils - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
@include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->


<!-- ## 3. Councils Section ========= -->
@include('components.council')
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>UN Women</h2>
                <p>
                As gender equality has stepped into numerous fields, its issue with STEM still faces insurmountable challenges. In higher education (2017), only 35% of all students enrolled in STEM-related fields are female, with significant drops in several fields, such as ICT (28%) and engineering (27%). STEM-related industry has not provided sufficient contribution, either, with only 30% of all of the world’s researchers are women, impacted by several biggest economies, like Japan (13.6%, per 2010) and South Korea (16.7%, per 2010). Several contentions may play into factor, including income inequality, discrimination in promotion, lack of role models, and sexual harassment. The council may also discuss women's increasing importance in STEM, as women’s interest in this field has never been higher while the gender gap in achievements and competencies gradually trends down (TIMSS, 2015). With STEM underpinning the 2030 Agenda for Sustainable Development, UN Women ITBMUN 2021 has been called to resolve this matter
                <br><br>What should the delegates expect from this council?
                <br>    1. Aspire to gain deeper understanding about gender equality. 
                <br>    2. From STEM education backgrounds, to naturally (and inevitably) relate to this issue. 
                <br>    3. Eager to collaborate, as most parties support the development of women’s role in STEM

                </p>
            </div>
        </div>
    </div>

    </div>
</section> 
<!-- ## END of Councils ========= -->


<!-- ## 4. Footer Navigation ========= -->
@include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

</main>
@endsection


<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
