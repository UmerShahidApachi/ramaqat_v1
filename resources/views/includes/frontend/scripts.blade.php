<!-- jQuery -->

<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/frontend/js/mdb.min.js')}}"></script>
 <!-- myscripte class -->
<script type="text/javascript" src="{{asset('assets/frontend/js/script.js')}}" ></script>
<!-- Your custom scripts (optional) -->
 <script type="text/javascript" src="{{asset('assets/frontend/js/custom.js')}}"></script>
 <script>
// $('.multi-item-carousel').on('slide.bs.carousel', function (e) {
//     let $e = $(e.relatedTarget),
//       itemsPerSlide = 3,
//       totalItems = $('.carousel-item', this).length,
//       $itemsContainer = $('.carousel-inner', this),
//       it = itemsPerSlide - (totalItems - $e.index());
//     if (it > 0) {
//       for (var i = 0; i < it; i++) {
//         $('.carousel-item', this).eq(e.direction == "left" ? i : 0).
//           // append slides to the end/beginning
//           appendTo($itemsContainer);
//       }
//     }
//   });

</script>
<script>

function openNav() {
document.getElementById("mySidebar").style.width = "300px";
document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
document.getElementById("mySidebar").style.width = "0";
document.getElementById("main").style.marginLeft= "0";
}

</script>

<script>
 $('.select-selected').bind('DOMSubtreeModified', function(){
  var lang = $('.select-selected').text();
  // alert(lang);
  if (lang !="") {
      if(lang=="Arabic"){
        set_lang= 'ar';
      }else{
        set_lang= 'en';
      }
    $.ajax( {
          type: 'POST',
          headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
          },
          url: '{{url("language")}}/'+set_lang,
          success: function ( msg ) {
           location.reload();
          }
        } );
  }
});
</script>
