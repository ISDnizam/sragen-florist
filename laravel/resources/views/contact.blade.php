@extends('layouts.app') 
@section('content')
<div class="page-heading style-2" style="margin-top:-15px">
    <div class="container">
        <h1>{{$title}}</h1>
    </div>
</div>
<div class="page-breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>{{$title}}</li>
        </ul>
    </div>
</div>
<section class="container" id="site-content">
   <div class="normal">
      <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=-7.422637,111.0310356&amp;q=Jalan%20Sukowati%2C%20Dusun%20Kebayanan%20Sragen%20Manggis%2C%20Sragen%20Wetan%2C%20Sragen%20Regency%2C%20Central%20Java+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">km radius map</a></iframe></div>
      <br />
      <div class="vc_row-full-width vc_clearfix"></div>
      <div class="vc_row wpb_row vc_row-fluid">
         <div class="wpb_column vc_column_container vc_col-sm-4">
            <div class="vc_column-inner ">
               <div class="wpb_wrapper">
                  <h4 class='heading-content  style-1' ><span>Hubungi Kami</span></h4>
                  <div class="vc_empty_space"   style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                  <div class="wpb_text_column wpb_content_element " >
                     <div class="wpb_wrapper">
                        <p><strong>Toko Bunga Sragen - Florist Sragen</strong></p>
                        <p>{{ $address->value}}
                        </p>
                        <p>Phone/WA: {{ $phone->value}}<br />
                           </a>Website: www.sragenflorist.com
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
      </div>
   </div>
</section>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
      </div>
   </div>
</div>
@endsection