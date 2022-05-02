{{-- @extends('layouts.app')

@section('content') --}}

<header id="header" >
    <nav class="nav-menu  d-lg-block">
      <ul class="duplicate-nav text-center">
          <li class="borNo">
              <form id="sForm">
                         <div class="box">
                          <div class="box-inner">
                          <input type="search" name="search" id="search" placeholder="Search here...">
                      </div>
                  </div>
              </form>
          </li>
          <li>
             <div>
                <a href="#" id="sClick">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   <div>Search</div>
                </a>
             </div>
          </li>
          <li>
             <div>
                <a href="#">
                   <i class="fa fa-map-marker" aria-hidden="true"></i>
                   <div>Location</div>
                </a>
             </div>
             <ul class="dropdown" id="style-2">
               <li><a href="#">Alabama</a></li>
               <li><a href="#">Alaska</a></li>
               <li><a href="#">Arizona</a></li>
               <li><a href="#">Arkansas</a></li>
               <li><a href="#">California</a></li>
               <li><a href="#">Colorado</a></li>
               <li><a href="#">Connecticut</a></li>
               <li><a href="#">Delaware</a></li>
               <li><a href="#">District of Columbia <br>(Washington DC)</a></li>
               <li><a href="#">Florida</a></li>
               <li><a href="#">Georgia</a></li>
               <li><a href="#">Hawaii</a></li>
               <li><a href="#">Idaho</a></li>
               <li><a href="#">Illinois</a></li>
               <li><a href="#">Indiana</a></li>
               <li><a href="#">Iowa</a></li>
               <li><a href="#">Kansas</a></li>
               <li><a href="#">Kentucky</a></li>
               <li><a href="#">Louisiana</a></li>
               <li><a href="#">Maine</a></li>
               <li><a href="#">Maryland</a></li>
               <li><a href="#">Massachusetts</a></li>
               <li><a href="#">Michigan</a></li>
               <li><a href="#">Minnesota</a></li>
               <li><a href="#">Mississippi</a></li>
               <li><a href="#">Missouri</a></li>
               <li><a href="#">Montana</a></li>
               <li><a href="#">Nebraska</a></li>
               <li><a href="#">Nevada</a></li>
               <li><a href="#">New Hampshire</a></li>
               <li><a href="#">New Jersey</a></li>
               <li><a href="#">New Mexico</a></li>
               <li><a href="#">New York</a></li>
               <li><a href="#">North Carolina</a></li>
               <li><a href="#">North Dakota</a></li>
               <li><a href="#">Ohio</a></li>
               <li><a href="#">Oklahoma</a></li>
               <li><a href="#">Oregon</a></li>
               <li><a href="#">Pennsylvania</a></li>
               <li><a href="#">Puerto Rico <br>(Territory of USA)</a></li>
               <li><a href="#">Rhode Island</a></li>
               <li><a href="#">South Carolina</a></li>
               <li><a href="#">South Dakota</a></li>
               <li><a href="#">Tennessee</a></li>
               <li><a href="#">Texas</a></li>
               <li><a href="#">Utah</a></li>
               <li><a href="#">Vermont</a></li>
               <li><a href="#">Virginia</a></li>
               <li><a href="#">Washington</a></li>
               <li><a href="#">West Virginia</a></li>
               <li><a href="#">Wisconsin</a></li>
               <li><a href="#">Wyoming</a></li>
             </ul>
          </li>
          <!-- <li>
             <div>
                <a href="infomercials.html">
                   <i class="fa fa-camera" aria-hidden="true"></i>
                   <div>Informecials</div>
                </a>
             </div>
          </li> -->
          <li>
             <div>
                <a href="javascript:void(0)">
                   <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                   <div> Shopping</div>
                </a>
             </div>
             <ul class="dropdown" id="style-2">
               <li>
                 <div>
                   <a href="{{url('/shopping')}}">Infomercials</a>
                 </div>
               </li>
               <li>
                 <div>
                   <a href="{{ url('/store-brand')}}">Boutiques Brands</a>
                 </div>
               </li>
               <li>
                 <div>
                   <a href="{{ url('/bwt-store')}}">Boutiques Showcase</a>
                 </div>
               </li>
               <li>
                 <div>
                   <a href="{{ url('/speciality-store')}}">Specialty Boutiques</a>
                 </div>
               </li>
               <li>
                 <div>
                   <a href="{{ url('/product')}}">Products</a>
                 </div>
               </li>
               <li>
                 <div>
                   <a href="{{ url('/classified')}}">Classifieds</a>
                 </div>
               </li>
             </ul>
          </li>
          <li>
             <div>
                <a href="{{url('join-community')}}">
                   <i class="fa fa-envelope" aria-hidden="true"></i>
                   <div>Join Our Community</div>
                </a>
             </div>
          </li>

             <li>
             <div>
                <a href="{{url('checkout')}}">
                   <i class="fa fa-cart-plus" aria-hidden="true">
                     {{-- @if (auth()->guard('web_user')->Id())
                     <span>{{Cart::session(auth()->guard('web_user')->Id())->getContent()->count()}}</span>                         
                     @endif --}}
                   </i>
                   <div>Cart</div>
                </a>
             </div>
          </li>
          <li>
             <div>
                <a href="javascript:void(0);">
                   <i class="fa fa-lock" aria-hidden="true"></i>
                   <div>Account</div>
                </a>
             </div>
               @if (Auth::guard('web_user')->check())

             <ul class="dropdown" id="style-2">
                <li>
                  <div>
                    <a href="{{url('/profile')}}">Profile</a>
                  </div>
                </li>
               <li>
                  <div>
                    <a href="{{url('boutique/create')}}">Create Boutique</a>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="{{url('/mi-channel')}}">My Channel</a>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="{{url('/myorder')}}">My Order</a>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="{{url('/logout')}}">logout</a>
                  </div>
                </li>
              </ul>

             @else
             <ul class="dropdown" id="style-2">
                <li>
                  <div>
                    <a href="{{url('studio/signup')}}">Create Studio</a>
                  </div>
                </li>
                 <li>
                  <div>
                    <a href="{{url('boutique/create')}}">Create Boutique</a>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="{{url('/sign-in')}}">Sign In</a>
                  </div>
                </li>
                <!-- <li>
                  <div>
                    <a href="{{url('sign-up')}}">Sign Up</a>
                  </div>
                </li> -->
              </ul>
             @endif
          </li>
       </ul>
    </nav>
</header>


{{--
@endsection --}}
