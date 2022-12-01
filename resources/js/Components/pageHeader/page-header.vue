<script>
import { Link } from '@inertiajs/inertia-vue3'
import DropdownLink from '../DropdownLink.vue'

export default{
    components:{
        Link,
        DropdownLink


    },
    props:{
    canLogin: Boolean,
    canRegister: Boolean,
 },
 setup(props){
    const canLogin=props.canLogin
    const canRegister=props.canRegister
    return{
        canLogin,
        canRegister
    }

 }


}
</script>
<template>

  <nav class=" fixed nav-bg w-full h-22   border-b-slate-200 ">
      <section class="container ">
        <div  class=" flex justify-between lg:mx-0 ">

            <h1>
              <Link href="/"><h1 class="text-lg font-bold font-mono md:text-xl lg:text-2xl">
                <span class="secondary-color">Manners</span> & Ettequetes
              </h1></Link>
              </h1>

          <ul
            class="hidden lg:flex lg:gap-5 font-sans open sans font-semibold "
          >
            <!-- <li>
              <Link v-if="$page.props.auth.user" href="/register" class=" hidden text-xs font-bold uppercase"
                >sign up</Link
              >
              <Link v-else href="/register" class=" text-xs font-bold uppercase"
                >sign up</Link
              >


            </li> -->
            <li>
              <Link  href="/blog" class="text-xs font-bold uppercase"
                >blog post</Link>

            </li>
            <li>
              <Link v-if="$page.props.auth.user" href="/login" class="hidden text-xs font-bold uppercase"
                >sign in</Link
              >
              <Link v-else href="/login" class=" text-xs font-bold uppercase"
                >sign in</Link
              >
            </li>

            <li>
                <div v-if="$page.props.auth.user" class="action card-border ml-2">
        <div class="profile" onclick="menuToggle();">
            <img src="https://i.pravatar.cc/60" alt="">
        </div>

           <div  class="menu">
            <h3>
               welcome profile
                <div>
                   {{ $page.props.auth.user.email}}
                </div>
            </h3>
            <ul class="ml-8">
                <li>
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-xs font-bold ">Dashboard</Link>
                </li>
                <li>

                    <Link v-if="$page.props.auth.user" :href="route('logout')" method="post" class=" ml-4 text-xs font-bold">logout</Link>
                </li>
            </ul>
        </div>
    </div>



                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-xs font-bold uppercase">Dashboard</Link>
                <Link v-else :href="route('dashboard')" class="hidden text-xs font-bold uppercase">Dashboard</Link>
            </li>
            <li>
              <Link href="/contact" class="text-xs font-bold uppercase"
                >Contact us</Link
              >
            </li>

            <li>
              <Link v-if="$page.props.auth.user" href="/messages" class="text-xs font-bold uppercase"
                >Contact messages</Link>

            </li>



            <li>
            <Link href="/about"   class="text-xs font-bold uppercase">About us</Link>


            </li>
            <li></li>
            <li>
              <div class="mt-8 md:mt-0">

                <Link v-if="$page.props.auth.user"  class=" ml-4 text-xs font-bold uppercase"></Link>
                <Link v-else  class="  ml-4 text-xs font-bold uppercase">home page</Link>

                <a
                  href="#newLetter"

                  class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 ml-3 mr-6 rounded-full text-xs font-semibold text-white uppercase py-3 px-5"
                  >Subscribe for Updates</a
                >
              </div>
            </li>
          </ul>
          <!-- nav icons manualy made  -->
          <section class="lg:hidden cursor-pointer">
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
          </section>
        </div>
      </section>
    </nav>

</template>
<style>

html{
    scroll-behavior: smooth;
}

.icons-size{
    color: #333;
    font-size: 14px;
}
.action{
    position: fixed;
    right: 30px;
    top:20px
}
.action .profile{
    border-radius: 50%;
    cursor: pointer;
    height: 60px;
    overflow: hidden;
    position: relative;
    width: 60px;
}
.action .profile img{
    width: 100%;
    top:0;
    position: absolute;
    object-fit: cover;
    left: 0;
    height: 100%;
}
.action .menu{
    background-color:var( --cardBackground) ;
    box-sizing:0 5px 25px rgba(0,0,0,0.1);
    border-radius: 15px;
    padding: 10px 20px;
    position: absolute;
    right: -10px;
    width: 200px;
    transition: 0.5s;
    top: 120px;
    visibility: hidden;
    opacity: 0;
    border: 0.1px var(--borderColor) solid;
   cursor: pointer;
}
.action .menu.active{
    opacity: 1;
    top: 80px;
    visibility: visible;
}
.action .menu::before{
    background-color:#fff;
    content: '';
    height: 20px;
    position: absolute;
    right: 30px;
    /* transform:rotate(45deg); */
    /* top:-5px; */
    /* width: 20px; */
}
.action .menu h3{
    color: #555;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.3em;
    padding: 20px 0px;
    text-align: left;
    width: 100%;
}
.action .menu h3 div{
    color: #818181;
    font-size: 14px;
    font-weight: 400;
}
.action .menu ul li{
    align-items: center;
    border-top:1px solid rgba(0,0,0,0.05);
    display: flex;
    justify-content: left;
    list-style: none;
    padding: 10px 0px;
}
.action .menu ul li img{
    max-width: 20px;
    margin-right: 10px;
    opacity: 0.5;
    transition:0.5s
}
.action .menu ul li a{
    display: inline-block;
    color: #555;
    font-size: 14px;
    font-weight: 600;
    padding-left: 15px;
    text-decoration: none;

    transition: 0.5s;
}
.action .menu ul li:hover img{
    opacity: 1;
    background: red;
}
.action .menu ul li:hover a{

font-weight: 800;

}
</style>
