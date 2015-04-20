<?php

/* TouchBundle:Anasayfa:index.html.twig */
class __TwigTemplate_c61b84d6a19d1f3e1f8be34c8027747ec94965ce96ba47856de467151fade43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Touch HomePage</title>


    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" />

</head>
<body>
";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/stepsForm.js"), "html", null, true);
        echo "\"></script>
<script>
    var theForm = document.getElementById( 'theForm' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            // hide form
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

             form.submit();

        }
    } );
</script>
</body>
</html>";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"container\">
    <!-- Top Navigation -->

    <header class=\"codrops-header\">
        <h1>Touch <span>Tutor's can get in touch their students</span></h1>
    </header>
    <center>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Log-In</a> <br>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("reg");
        echo "\">Register</a>
    </center>

</div><!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "TouchBundle:Anasayfa:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  89 => 25,  80 => 18,  77 => 17,  57 => 34,  53 => 33,  48 => 32,  46 => 17,  39 => 13,  35 => 12,  31 => 11,  20 => 2,);
    }
}
