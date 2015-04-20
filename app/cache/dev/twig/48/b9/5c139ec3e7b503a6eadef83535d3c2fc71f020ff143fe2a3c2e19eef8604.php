<?php

/* TouchBundle:Anasayfa:register.html.twig */
class __TwigTemplate_48b95c139ec3e7b503a6eadef83535d3c2fc71f020ff143fe2a3c2e19eef8604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Touch Register</title>


    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/css/normalize.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/css/demo.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/css/component.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/css/cs-select.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/css/cs-skin-boxes.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div class=\"container\">
    <div class=\"fs-form-wrap\"  id=\"fs-form-wrap\">
        <div class=\"fs-title\">
            <h1>Touch Register Form</h1>
            <div class=\"codrops-top\">
                <a class=\"codrops-icon codrops-icon-prev\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("anasayfa");
        echo "\"><span>Homepage</span></a>
                <a class=\"codrops-icon codrops-icon-drop\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><span>Login</span></a>
            </div>
        </div>
        <form id=\"myform\" method=\"post\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("registeration");
        echo "\" class=\"fs-form fs-form-full\" autocomplete=\"off\">
            <ol class=\"fs-fields\">
                <li>
                    <label class=\"fs-field-label fs-anim-upper\" for=\"kullaniciAdi\">What is your username?</label>
                    <input class=\"fs-anim-lower\" id=\"username\" name=\"username\" type=\"text\" placeholder=\"Your username..\" required/>
                </li>
                <li>
                    <label class=\"fs-field-label fs-anim-upper\" for=\"usermail\" data-info=\"We won't send you spam, we promise...\">What's your email address?</label>
                    <input class=\"fs-anim-lower\" id=\"usermail\" name=\"usermail\" type=\"email\" placeholder=\"example@road.us\" required/>
                </li>
                <li>
                    <label class=\"fs-field-label fs-anim-upper\" for=\"userpass\">Your password?</label>
                    <input class=\"fs-anim-lower\" type=\"password\" id=\"userpass\" name=\"userpass\" required />
                </li>
            </ol><!-- /fs-fields -->
            <button class=\"fs-submit\" type=\"submit\">Register</button>
        </form><!-- /fs-form -->
    </div><!-- /fs-form-wrap -->



</div><!-- /container -->
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/js/selectFx.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("register/js/fullscreenForm.js"), "html", null, true);
        echo "\"></script>
<script>
    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );

        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TouchBundle:Anasayfa:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 51,  100 => 50,  96 => 49,  71 => 27,  65 => 24,  61 => 23,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
