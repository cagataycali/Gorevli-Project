<?php

/* @Touch/Own/index.html.twig */
class __TwigTemplate_605e2c8fb9253868f0f53c36bb08ad6e5cfb03196967bc458f2fc3f736bb8941 extends Twig_Template
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
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- FontAwesome 4.3.0 -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons 2.0.0 -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 26
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
        // line 59
        echo $this->env->getExtension('routing')->getPath("anasayfa");
        echo "\"><span class=\"fa fa-home\"></span> </a></li>

                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->

                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">

                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 77
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
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo "</p>
                    <a><i class=\"fa fa-circle text-success\"></i> Available</a>

                </div>
            </div>

            <!-- search form (Optional) -->
            <form  class=\"sidebar-form\">
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
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 118
            echo "                    <li><a><i class=\"fa fa-group\"></i> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "grup", array()), "grupAd", array()), "html", null, true);
            echo "</span></a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </ul>
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
                <li><a><i class=\"fa fa-dashboard\"></i> Touch</a></li>
                <li class=\"active\">";
        // line 138
        $this->displayBlock('breadcrumb', $context, $blocks);
        echo "</li>
            </ol>
        </section>
        ";
        // line 141
        $this->displayBlock('icerik', $context, $blocks);
        // line 177
        echo "    </div>
</div>




<!-- jQuery 2.1.3 -->
<script src=\"";
        // line 184
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
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
<!-- Tema renk değiştirme özelliği , sonra eklenecek
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
-->
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 202
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

    // line 138
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 141
    public function block_icerik($context, array $blocks = array())
    {
        // line 142
        echo "            <section class=\"content\">
                <div class=\"row\">
                    <section class=\"col-lg-7\">


                        <div id=\"recent\"  class=\"box collapsed-box\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\"><span class=\"fa fa-bullhorn\"></span> Recent Announcements</h3>
                                <div class=\"box-tools pull-right\">
                                    <button class=\"btn btn-box-tool\"  data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                                </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div  class=\"box-body\">
                                ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["duyuru"]) ? $context["duyuru"] : $this->getContext($context, "duyuru")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 156
            echo "                                    <div class=\"box box-default box-solid collapsed-box\">
                                        <div class=\"box-header with-border\">
                                            <h3 class=\"box-title\">";
            // line 158
            echo $this->getAttribute($context["d"], "title", array());
            echo "</h3>
                                            <div class=\"box-tools pull-right\">
                                                <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                                                <button class=\"btn btn-box-tool\"  data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                            </div><!-- /.box-tools -->
                                        </div><!-- /.box-header -->
                                        <div style=\"display: none;\" class=\"box-body\">
                                            ";
            // line 165
            echo $this->getAttribute($context["d"], "announcement", array());
            echo "
                                        </div><!-- /.box-body -->
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                            </div><!-- /.box-body -->
                        </div>

                    </section>
                </div><!-- /.row (main row) -->
            </section><!-- /.content -->

        ";
    }

    public function getTemplateName()
    {
        return "@Touch/Own/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 169,  313 => 165,  303 => 158,  299 => 156,  295 => 155,  280 => 142,  277 => 141,  271 => 138,  255 => 202,  250 => 200,  245 => 198,  240 => 196,  235 => 194,  230 => 192,  219 => 184,  210 => 177,  208 => 141,  202 => 138,  182 => 120,  173 => 118,  169 => 117,  146 => 97,  123 => 77,  117 => 74,  107 => 67,  96 => 59,  60 => 26,  54 => 23,  45 => 17,  40 => 15,  36 => 14,  21 => 1,);
    }
}
