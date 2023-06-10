@extends('layouts.master')
@section('content')
<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper slider-container-full-height">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'sliderLayout': 'fullscreen', 'gridwidth': [1140,960,720,540], 'gridheight': [900,900,900,900], 'disableProgressBar': 'off', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'hide_under': 767, 'style': 'slider-arrows-style-2' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
						<ul>
							<li class="slide-overlay slide-overlay-level-9" data-transition="fade">
								<img src="{{url('backend/assets/img/slides/multi-purpose/home3.jpg')}}"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption bg-primary"
									data-x="['120','23','53','53']"
									data-y="['371','371','387','397']"
									data-start="1500"
									data-width="['20','20','17','10']"
									data-height="['157','157','102','83']"
									data-transform_in="x:[-100%];opacity:0;s:500;"
									data-transform_idle="skX:19deg"
									data-transform_out="x:[-100%];opacity:0;s:500;"></div>

				

								<div class="tp-caption text-color-light font-weight-bold font-primary effect-text-background"
									data-x="center"
									data-y="center" data-voffset="-30"
									data-start="1000"
									data-fontsize="['125','125','80','57']"
									data-lineheight="['130','130','90','62']"
									data-transform_in="y:[-100%];opacity:0;s:500;"
									data-transform_out="opacity:0;s:500;">Discover the Perfect Beats</div>

								<div class="tp-caption text-color-light font-primary"
									data-x="center" data-hoffset="['-150','-150','-125','-50']"
									data-y="center" data-voffset="['58','58','25','18']"
									data-start="1900"
									data-fontsize="['38','38','24','24']"
									data-transform_in="y:[100%];opacity:0;s:500;"
									data-transform_out="y:[100%];opacity:0;s:500;">World-Class Technology</div>

								
                        
							</li>

                            <li class="slide-overlay slide-overlay-level-9" data-transition="fade">
                            <a class="tp-caption btn btn-rounded btn-primary font-weight-semibold"
									href="#ourwork"
									data-hash
									data-hash-offset="90"
									data-x="center" data-hoffset="['305','305','175','0']"
									data-y="center" data-voffset="['65','65','35','150']"
									data-start="2200"
									data-whitespace="nowrap"	
									data-fontsize="['13','13','13','13']"
									data-paddingtop="['13','13','10','10']"
									data-paddingbottom="['13','13','10','10']"
									data-paddingleft="['65','65','50','50']"
									data-paddingright="['65','65','50','50']"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="y:[100%];opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;">Logging</a>
                            </li>
							
						</ul>
					</div>
				</div>

@endsection
