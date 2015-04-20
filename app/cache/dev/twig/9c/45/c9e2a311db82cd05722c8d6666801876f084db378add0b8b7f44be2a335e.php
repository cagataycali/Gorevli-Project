<?php

/* TouchBundle:Dashboard:index.html.twig */
class __TwigTemplate_9c45c9e2a311db82cd05722c8d6666801876f084db378add0b8b7f44be2a335e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'icerik' => array($this, 'block_icerik'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.

-->
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\">
    <title>Touch Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ckeditor/skins/moono/editor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- FontAwesome 4.3.0 -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons 2.0.0 -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->




<body class=\"skin-blue sidebar-mini\">

<div class=\"wrapper\">

    <!-- Navigasyon bar -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a  class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b class=\"glyphicon glyphicon-cloud\"  data-toggle=\"offcanvas\" role=\"button\" ></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b class=\"glyphicon glyphicon-cloud\" data-toggle=\"offcanvas\"></b></span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">

            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("anasayfa");
        echo "\"><span class=\"fa fa-home\"></span> </a></li>

                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->

                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">

                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Log-Out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Yan menü ve üst kısım -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">

                <div class=\"pull-left info\">
                    <p>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo "</p>
                    <!-- Status <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Available</a> -->

                </div>
            </div>

            <!-- search form (Optional) -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
                <ul class=\"sidebar-menu\">

                    ";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grup"]) ? $context["grup"] : $this->getContext($context, "grup")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 143
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_list", array("id" => $this->getAttribute($context["g"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-group\"></i> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "grupAd", array()), "html", null, true);
            echo "</span></a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
                    <li><a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("add_group");
        echo "\"><i class=\"fa fa-plus-square-o\"></i><span>Add Group</span> </a></li>
                </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Sayfa içeriği burada yer alacak -->
    <div style=\"min-height: 300px;\" class=\"content-wrapper\">
        <!-- Content Header (Page header) -->


        <section class=\"content-header\">
            <h1>
                Dashboard
                <small class=\"text-light-blue\">Quick access </small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Touch</a></li>
                <li class=\"active\">";
        // line 165
        $this->displayBlock('breadcrumb', $context, $blocks);
        echo "</li>
            </ol>
        </section>
        ";
        // line 168
        $this->displayBlock('icerik', $context, $blocks);
        // line 256
        echo "    </div>
</div>




<!-- jQuery 2.1.3 -->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.2 -->
<script src=\"http://code.jquery.com/ui/1.11.2/jquery-ui.min.js\" type=\"text/javascript\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- tüm animasyonlar burada -->
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
<!-- Tema renk değiştirme özelliği , sonra eklenecek
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
-->
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    \$('select').select2();
</script>
<script>
    // Replace the <textarea id=\"editor1\"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'duyuru' );
</script>
</body>
</html>";
    }

    // line 165
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 168
    public function block_icerik($context, array $blocks = array())
    {
        // line 169
        echo "        <section class=\"content\">
            <div class=\"row\">
                <section class=\"col-lg-7 connectedSortable ui-sortable\">


                    <!-- Görev ekle -->
                    <div class=\"box box-info\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"><span class=\"fa fa-bullhorn\"></span> Publish Multiple Announcements   </h3>
                            <div class=\"box-tools pull-right\">
                                <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body\">
                                <form action=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("multipleAnnouncement");
        echo "\" method=\"post\">
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" id=\"baslik\" name=\"baslik\" required=\"required\" placeholder=\"Title of announcement\" type=\"text\">
                                    </div>
                                <div class=\"form-group\">
                                    <select name=\"secenekler[]\" id=\"secenekler[]\"  data-tags=\"true\" data-placeholder=\"Select groups\" class=\"js-example-basic-multiple form-control\"  required=\"required\" multiple=\"multiple\">
                                        ";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grup"]) ? $context["grup"] : $this->getContext($context, "grup")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 190
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "grupAd", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <textarea required=\"required\" class=\"ckeditor\" name=\"duyuru\" id=\"duyuru\" placeholder=\"Your announcement is here\" rows=\"10\" cols=\"80\"></textarea>
                                </div><!-- /.form group -->
                                    <input type=\"hidden\" id=\"author\" name=\"author\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\">

                                    <div class=\"box-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Publish</button>
                                </div>
                                </form>
                        </div>
                     </div>
                    <!-- Add multiple member

                    <div class=\"box box-warning collapsed-box \">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"> <span class=\"fa fa-user\"></span>  Add member </h3>
                            <div class=\"box-tools pull-right\">
                                <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body\">

                    <form role=\"form\" action=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("addMultipleMember");
        echo "\" method=\"post\">
                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                <label for=\"kullaniciMail\">Email</label>
                                <input class=\"form-control\" id=\"kullaniciMail\" name=\"kullaniciMail\" placeholder=\"E-Mail\" type=\"email\" required=\"required\" >
                            </div>
                            <div class=\"form-group\">
                                <label for=\"kullaniciAdi\">Username</label>
                                <input class=\"form-control\" id=\"kullaniciAdi\" name=\"kullaniciAdi\" placeholder=\"Username\" type=\"text\" required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"kullaniciAd\">Member Name</label>
                                <input class=\"form-control\" id=\"kullaniciAd\" name=\"kullaniciAd\" placeholder=\"Member Name\" type=\"text\" required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"kullaniciSifre\">Password</label>
                                <input class=\"form-control\" id=\"kullaniciSifre\" name=\"kullaniciSifre\" placeholder=\"Password\" type=\"password\" required=\"required\">
                            </div>
                            <div class=\"form-group\">

                                <select name=\"secenekler[]\" data-tags=\"true\" data-placeholder=\"Select group's\" class=\"js-example-basic-multiple form-control\" multiple=\"multiple\">
                                    ";
        // line 237
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grup"]) ? $context["grup"] : $this->getContext($context, "grup")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 238
            echo "                                        <option  >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "grupAd", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"box-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                        </div>
                    </form>
            </div>
    </div>
    -->
                </section>
            </div><!-- /.row (main row) -->
        </section><!-- /.content -->

        ";
    }

    public function getTemplateName()
    {
        return "TouchBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 240,  409 => 238,  405 => 237,  381 => 216,  359 => 197,  352 => 192,  341 => 190,  337 => 189,  328 => 183,  312 => 169,  309 => 168,  303 => 165,  287 => 281,  282 => 279,  277 => 277,  272 => 275,  267 => 273,  262 => 271,  251 => 263,  242 => 256,  240 => 168,  234 => 165,  212 => 146,  209 => 145,  198 => 143,  194 => 142,  171 => 122,  148 => 102,  142 => 99,  132 => 92,  121 => 84,  62 => 28,  56 => 25,  47 => 19,  40 => 15,  36 => 14,  21 => 1,);
    }
}
