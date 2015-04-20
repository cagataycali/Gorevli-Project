<?php

/* TouchBundle:Dashboard/Add/group.html.twig:index.html.twig */
class __TwigTemplate_cc67eb28692849e53833447ab6d6dc702b4f1a6e0279600760e2b746d85fb3c5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/css/normalize.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/css/demo.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/css/component.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/css/cs-select.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/css/cs-skin-boxes.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div class=\"container\">

    <div class=\"fs-form-wrap\"  id=\"fs-form-wrap\">
        <div class=\"fs-title\">
            <h1>Touch Add Group</h1>
            <div class=\"codrops-top\">
                <a class=\"codrops-icon codrops-icon-prev\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("anasayfa");
        echo "\"><span>Homepage</span></a>
                <a class=\"codrops-icon codrops-icon-drop\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><span>Log-Out</span></a>
            </div>
        </div>
        <form id=\"myform\" method=\"post\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("add_group_action");
        echo "\" class=\"fs-form fs-form-full\" autocomplete=\"off\">
            <ol class=\"fs-fields\">
                <li>
                    <label class=\"fs-field-label fs-anim-upper\" for=\"grupAd\">What is your group name?</label>
                    <input class=\"fs-anim-lower\" id=\"grupAd\" name=\"grupAd\" type=\"text\" placeholder=\"Your group name is..\" required/>
                </li>
                </ol><!-- /fs-fields -->
            <button class=\"fs-submit\" type=\"submit\">Add group</button>
        </form><!-- /fs-form -->
    </div><!-- /fs-form-wrap -->



</div><!-- /container -->
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/js/selectFx.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("add/js/fullscreenForm.js"), "html", null, true);
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
        return "TouchBundle:Dashboard/Add/group.html.twig:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  93 => 43,  89 => 42,  72 => 28,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
