<!-- For demo purposes – can be removed on production -->

<!-- For demo purposes – can be removed on production : End -->
<!-- JavaScripts placed at the end of the document so the pages load faster -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- <script src="{{ asset('frontend_new') }}/assets/js/scripts.js"></script> -->

{{-- custom toastr script --}}
<script>
$(document).ready(() => {
  const $ddBtn = $('.accordion-button')
  const $dd = $($ddBtn.data('bs-target'))
  $ddBtn.on('click', () => {
    console.log("gello",$dd);
  //  $dd.toggleClass('show')
  })
})
        @if (Session::has('message'))
            let type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}")
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}")
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}")
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}")
                    break;
                default:
                    break;
            }
        @endif
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");
        var rootElement = document.documentElement;


        $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {
            $("#scrollToTopBtn").addClass('show');
          } else {
            $("#scrollToTopBtn").removeClass('show');
          }
        });

        $("#scrollToTopBtn").on('click', function(e) {
          e.preventDefault();
           rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        });


      if ($(".dropdown").length) {

        $(document).on("click", ".dropdown-menu .dropdown-item", function (e) {
            e.preventDefault();
            if (!$(this).hasClass("active")) {
               $(".dropdown-menu .dropdown-item").removeClass("active");
               $(this).addClass("active");
               var html = $(this).html();
              $(this)
                  .parents(".dropdown")
                  .find(".btn")
                  .html(html); 
                      }
                  });
        }

         const menu = document.querySelector(".menu");
         const menuMain = menu.querySelector(".menu-main");
         const goBack = menu.querySelector(".go-back");
         const menuTrigger = document.querySelector(".mobile-menu-trigger");
         const closeMenu = menu.querySelector(".mobile-menu-close");
         let subMenu;
         menuMain.addEventListener("click", (e) =>{
            if(!menu.classList.contains("active")){
                return;
            }
           if(e.target.closest(".menu-item-has-children")){
             const hasChildren = e.target.closest(".menu-item-has-children");
              showSubMenu(hasChildren);
           }
         });
         goBack.addEventListener("click",() =>{
             hideSubMenu();
         })
         menuTrigger.addEventListener("click",() =>{
             toggleMenu();
         })
         closeMenu.addEventListener("click",() =>{
             toggleMenu();
         })
         document.querySelector(".menu-overlay").addEventListener("click",() =>{
            toggleMenu();
         })
         function toggleMenu(){
            menu.classList.toggle("active");
            document.querySelector(".menu-overlay").classList.toggle("active");
         }
         function showSubMenu(hasChildren){
            subMenu = hasChildren.querySelector(".sub-menu");
            subMenu.classList.add("active");
            subMenu.style.animation = "slideLeft 0.5s ease forwards";
            const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
            menu.querySelector(".current-menu-title").innerHTML=menuTitle;
            menu.querySelector(".mobile-menu-head").classList.add("active");
         }

         function  hideSubMenu(){  
            subMenu.style.animation = "slideRight 0.5s ease forwards";
            setTimeout(() =>{
               subMenu.classList.remove("active");  
            },300); 
            menu.querySelector(".current-menu-title").innerHTML="";
            menu.querySelector(".mobile-menu-head").classList.remove("active");
         }
         
         window.onresize = function(){
            if(this.innerWidth >991){
                if(menu.classList.contains("active")){
                    toggleMenu();
                }

            }
         }  
</script>
@yield('frontend_script')
