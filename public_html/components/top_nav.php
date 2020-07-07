<div class="ui borderless menu">
<div class="item">
    <a href="/">
        <i class="large blue lightbulb icon"></i>
    </a>

</div>
<div class="left menu hide-on-m">
<div class="item">
       <a href="/" class="active">About Me</a>
    </div>

    <div class="item">
        <a href="/components/my-portfolio.php">Portfolio</a>
    </div>

    <div class="item">
        <a href='/components/services-by-rosa.php'>Store </a>
    </div>

    <div class="item" >
        <a href='/components/blog-of-rosa.php'>Blog</a>
    </div>
     <div class="item" >
        <a href='/components/my-gallery.php'>Gallery</a>
    </div> 

    <div class="item" >
        <a href='/components/get-in-touch.php'>Contact Me</a>
    </div> 


</div>
   

    <div class="right menu hide-on-m">
        <div class="item">
        <button class="ui tiny circular facebook icon button">
                <i class="facebook icon"></i>
        </button>
        </div>

        <div class="item">
        <button class="ui tiny circular linkedin icon button">
                <i class=" linkedin icon"></i>
        </button>
        </div>

        <div class="item">
        <button class="ui tiny circular twitter icon button">
                <i class="twitter icon"></i>
        </button>
        </div>

        
    </div>

    <div class="right menu hide-on-l">
        <div class="item" onclick='openMenu()'>

             <i class="ui large bars icon"></i>        


        </div>
    </div>

</div>

<div class="ui basic modal">
    <div class="ui segment nav-taps">
        <div class="ui three column container grid">
                <div class="row">
                    <div class=" column">
                        <a href="/">
                        <h5 class="ui inverted tiny icon header">
                            <i class="large home icon"></i>
                            <div class="content">
                                Home
                            </div>
                            </h5>
                        </a>
                    </div>

                    <div class=" column">
                        <a href="/components/services-by-rosa.php">
                        <h5 class="ui inverted tiny icon header">
                            <i class="large globe icon"></i>
                            <div class="content">
                                Services
                            </div>
                            </h5>
                        </a>
                    </div>

                    <div class=" column">
                        <a href="/components/my-portfolio.php">
                        <h5 class="ui inverted tiny icon header">
                            <i class="large briefcase icon"></i>
                            <div class="content">
                                Portfolio
                            </div>
                            </h5>
                        </a>
                    </div>
                </div>

                <div class="row">
                <div class=" column">
                        <a href="/components/my-gallery.php">
                        <h5 class="ui inverted tiny icon header">
                            <i class="large camera icon"></i>
                            <div class="content">
                                Gallery
                            </div>
                            </h5>
                        </a>
                    </div>

                    <div class=" column">
                        <a href="/components/blog-of-rosa.php">
                        <h5 class="ui inverted tiny icon header">
                            <i class="large microblog icon"></i>
                            <div class="content">
                                Blog
                            </div>
                            </h5>
                        </a>
                    </div>

                    <div class=" column">
                        <a href="/components/get-in-touch.php">
                        <h5 class="ui inverted tiny icon header">
                            <i class="large id card alternate icon"></i>
                            <div class="content">
                                Contact
                            </div>
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="ui inverted horizontal divider"><i class="ui code icon"></i></div>
                </div>
                <div class="row">
                <div class=" column">
                        <a href="/">
                        <button class="ui tiny circular facebook icon button">
                                <i class="facebook icon"></i>
                        </button>
                        </a>
                    </div>

                    <div class=" column">
                        <a href="/">
                        <button class="ui tiny circular linkedin icon button">
                                <i class="linkedin icon"></i>
                        </button>
                        </a>
                    </div>

                    <div class=" column">
                        <a href="/">
                        <button class="ui tiny circular instagram icon button">
                                <i class="instagram icon"></i>
                        </button>
                        </a>
                    </div>
                </div>


                


        </div>
    </div>
</div>

<script>
function openMenu(){
    $('.ui.basic.modal')
  .modal('show');
}

</script>
