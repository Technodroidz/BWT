<footer id="footer">
    <div class="copyright text-center">
       <ul class="list-inline">
          <li class="list-inline-item" style="margin:5px 24px;">CopyRight</li>
          <li class="list-inline-item" style="margin:5px 24px;"><a href="{{ url('advertisers')}}" style="color: #fff">Advertisers</a> </li>
           <li class="list-inline-item" style="margin:5px 24px;"><a href="{{ url('sponsors')}}" style="color: #fff">Sponsors</a> </li>
           <li class="list-inline-item" style="margin:5px 24px;"><a href="{{ url('partners')}}" style="color: #fff">Partners </a> </li>
          <li class="list-inline-item" style="margin:5px 24px;"><a href="{{ url('about-press')}}" style="color: #fff">About Press </a></li>
          <li class="list-inline-item" style="margin:5px 24px;"><a href="{{ url('feedback')}}" style="color: #fff">  FeedBack </a>  </li>
          <!-- <li class="list-inline-item" style="margin:5px 24px;"><a href="{{ url('report')}}" style="color:#fff"> Report </a> </li> -->
          <li class="list-inline-item" style="margin:5px 24px;"><a href="{{ route('contact.create')}}" style="color: #fff">Contact Us </a></li>
       </ul>
    </div>
 </footer>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<script>
$(document).ready(function(){
$(".navmenu").click(function(){
  $('.sidenav-bg').toggle();
  $('.widthhalf').toggleClass('widthfull')
});
});

$(document).ready(function(){
$(".navmenu-left").click(function(){
 $('.nav-menu > ul').toggle()
});
});
</script>
<script type="text/javascript">
 $(function(){
    $('.sidenav-duplicate a').filter(function(){return this.href==location.href}).parent().parent().addClass('active').siblings().removeClass('active')
    $('.sidenav-duplicate a').click(function(){
       $(this).parent().parent().addClass('active').siblings().removeClass('active')
    })
 })

</script>
<script type="text/javascript">
$(function() {
$('.material-card > .mc-btn-action').click(function () {
  var card = $(this).parent('.material-card');
  var icon = $(this).children('i');
  icon.addClass('fa-spin-fast');

  if (card.hasClass('mc-active')) {
      card.removeClass('mc-active');

      window.setTimeout(function() {
          icon
              .removeClass('fa-arrow-left')
              .removeClass('fa-spin-fast')
              .addClass('fa-bars');

      }, 800);
  } else {
      card.addClass('mc-active');

      window.setTimeout(function() {
          icon
              .removeClass('fa-bars')
              .removeClass('fa-spin-fast')
              .addClass('fa-arrow-left');

      }, 800);
  }
});
});
</script>
<script type="text/javascript">
$(window).load(function() {
$('.carousel').carousel('pause');
});
</script>
<script>
 $(document).ready(function(){
   $("#sClick").click(function(){
     $(".box").animate({
       width: "toggle"
     });
   });
 });
</script>
<script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>
<script type="text/javascript">

$( document ).ready(function() {
  // Grid or list selection
  $('#btn-list').on('click', function() {
    $('#main-folders').addClass('flex-column');
    $('#btn-grid').removeClass('active')
    $(this).addClass('active')
  });
  $('#btn-grid').on('click', function() {
    $('#main-folders').removeClass('flex-column');
    $('#btn-list').removeClass('active')
    $(this).addClass('active')
  });
  $('#btn-list').on('click', function() {
    $('#main-files').addClass('flex-column');
    $('#btn-grid').removeClass('active')
    $(this).addClass('active')
  });
  $('#btn-grid').on('click', function() {
    $('#main-files').removeClass('flex-column');
    $('#btn-list').removeClass('active')
    $(this).addClass('active')
  });

  // Open folder and see files
  $('button.folder-container').on('click', function() {
    $('#filesGroup').removeClass('d-none');
    $('#foldersGroup').addClass('d-none')
  });
  $('a#backToFolders').on('click', function() {
    $('#foldersGroup').removeClass('d-none');
    $('#filesGroup').addClass('d-none')
  });
});
</script>
<script>
  $('#first').click(function(){
    $('#video-submit').addClass('active');
    $('#faq-div,#ad-choices,#site-map,#feedback').removeClass('active');
  });
  $('#two').click(function(){
    $('#faq-div').addClass('active');
    $('#video-submit,#ad-choices,#site-map,#feedback').removeClass('active');
  });
  $('#three').click(function(){
    $('#ad-choices').addClass('active');
    $('#video-submit,#faq-div,#site-map,#feedback').removeClass('active');
  });
  $('#four').click(function(){
    $('#site-map').addClass('active');
    $('#video-submit,#faq-div,#ad-choices,#feedback').removeClass('active');
  });
  $('#five').click(function(){
    $('#feedback').addClass('active');
    $('#video-submit,#faq-div,#ad-choices,#site-map').removeClass('active');
  });
</script>
<script>
  (function($) {
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);
</script>
<script>
  $('.leftUl li').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
  });
</script>
<script>
  $(document).ready(function(){
    $(".load-product").slice(0, 8).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".load-product:hidden").slice(0, 4).slideDown();
      if($(".load-product:hidden").length == 0) {
        $("#loadMore").text("No Content").addClass("noContent");
      }
    });

  })
</script>
<script>
    $('a[href="#amazontv"]').click(function(){
          $('#amazon').addClass("show active");
          $('#appletv, #googletv, #roku').removeClass("show active in");
    });

    $('a[href="#appletv"]').click(function(){
          $('#appletv').addClass("show active");
          $('#amazontv, #googletv, #roku').removeClass("show active in");
    });

    $('a[href="#googletv"]').click(function(){
          $('#googletv').addClass("show active");
          $('#appletv, #roku, #amazontv').removeClass("show active in");
    });

    $('a[href="#roku"]').click(function(){
          $('#roku').addClass("show active");
          $('#appletv, #googletv, #amazontv').removeClass("show active in");
    });
</script>
<script>
$(function () {
    $(".comment-section").slice(0, 3).show();
    $("body").on('click touchstart', '.load-more1', function (e) {
      e.preventDefault();
      $(".comment-section:hidden").slice(0, 2).slideDown();
      if ($(".comment-section:hidden").length == 0) {
        $(".load-more1").css('visibility', 'hidden');
      }
      $('html,body').animate({
        scrollTop: $(this).offset().top
      }, 1000);
    });
  });

$(function () {
    $(".proRender .col-md-3").slice(0, 8).show();
    $("body").on('click touchstart', '.load-more', function (e) {
      e.preventDefault();
      $(".proRender .col-md-3:hidden").slice(0, 4).slideDown();
      if ($(".proRender .col-md-3:hidden").length == 0) {
        $(".load-more").css('visibility', 'hidden');
      }
      $('html,body').animate({
        scrollTop: $(this).offset().top
      }, 1000);
    });
  });

 </script>

 <script>
    $(document).on("change", ".file_multi_video", function(evt) {
    var $source = $('#video_here');
    $source[0].src = URL.createObjectURL(this.files[0]);
    $source.parent()[0].load();
    $('.video-files').show();
    $('.upload-btn').show();
    });
    function vide_like(e,video_id){
      let token = $("meta[name='csrf-token']").attr('content')
      let ele = $(e)
      $.ajax({
            url: '{{route('video-like')}}',
            method: 'POST',
            data: {'video_id':video_id,'_token':token},
        }).done(function(res){
            let like_count = parseInt(ele.parent().find('span').text())            
            if(res.liked){              
               ele.addClass('active')
               ele.parent().find('span').text(like_count+1)
              }else{
                ele.removeClass('active')  
                ele.parent().find('span').text(like_count-1)
              }
        }).error(function(res){
          if(res.status==401)
              window.location.href = '{{url('sign-in')}}'
          else
            alert('server error')
        });
        return false;
    }

    $('.comment').on('click',function(){
        let comment = $('#comment-body').val()
        let video = $(this).attr('data-video')
        let _token="{{ csrf_token() }}";
        if(comment.trim()=='')return false
        $.ajax({
            url: "{{route('video-comment')}}",
            type:"POST",
            data:{
            comment:comment,
            video:video,
            _token: _token
            },
            success:function(res){  
                window.location.reload(true)
            } 
        })
    })
    $('.add-cart').on('click',function(){
        let elem = $(this)
        let product_id = elem.attr('data-id')
        let _token="{{ csrf_token() }}";
    
        $.ajax({
            url: "{{route('add-cart')}}",
            type:"POST",
            data:{
            product_id:product_id,
            _token: _token
            },
            success:function(res){  
                elem.siblings('a').show()
                elem.hide()
            },
            error(res){
              if(res.status==401)
                  window.location.href = '{{url('sign-in')}}'
            }
        })
    })
    $('.remove-cart').on('click',function(){
        let elem = $(this)
        let product_id = elem.attr('data-id')
        let _token="{{ csrf_token() }}";
    
        $.ajax({
            url: "{{route('remove-cart')}}",
            type:"POST",
            data:{
            product_id:product_id,
            _token: _token
            },
            success:function(res){  
                elem.siblings('a').show()
                elem.hide()
            },
            error(res){
              if(res.status==401)
                  window.location.href = '{{url('sign-in')}}'
            }
        })
    })
    $('.video-delete').on('click',function(){
      if(!confirm('Are you sure?')){
        return false;
      }
        let video = $(this).attr('data-video')
        let _token="{{ csrf_token() }}";
    
        $.ajax({
            url: "{{route('video-delete')}}",
            type:"POST",
            data:{
            video:video,
            _token: _token
            },
            success:function(res){  
                window.location.reload(true)
            } 
        })
    })
    $('#video-upload').on('submit',function(){
      let form = $(this)
      $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress",
                    function(event){
                      let percent = (event.loaded / event.total) * 100;
                      let progress = Math.round(percent);
                      console.log(progress);
                      form.find('progress').show()
                      form.find('progress').css("width", progress+'%');
                    },
                    false
                );
                xhr.addEventListener("error", function(){alert('Error')}, false);
                xhr.addEventListener("abort", function(){alert('Abort')}, false);

                return xhr;
            }
        }).done(function(res){
          window.location.reload(true)
        }).error(function(res){
          if(res.status==422){
            let data = res.responseJSON
            Object.keys(data.errors).forEach((key)=>{
              $('input[name='+key+']').parent().find('.text-danger').text(data.errors[key])
            })
          }
        });
        return false;
    })
     $(function() {

      var $list = $("#main-folders");

      $list.children().detach().sort(function(a, b) {
        return $(a).text().localeCompare($(b).text());
      }).appendTo($list);

    });
    function goBack() {
      window.history.back();
    }
 </script>

<script>
    $('#f').click(function(){
        $('.first').addClass('d-flex');
        $('.second, .third, .fourth, .fifth').removeClass('d-flex');
    });
    $('#s').click(function(){
        $('.second').addClass('d-flex');
        $('.first, .third, .fourth, .fifth').removeClass('d-flex');
    });
    $('#t').click(function(){
        $('.third').addClass('d-flex');
        $('.first, .second, .fourth, .fifth').removeClass('d-flex');
    });
    $('#f').click(function(){
        $('.fourth').addClass('d-flex');
        $('.first, .second, .third, .fifth').removeClass('d-flex');
    });
    $('#fi').click(function(){
        $('.fifth').addClass('d-flex');
        $('.first, .second, .third, .fourth').removeClass('d-flex');
    });
</script>
