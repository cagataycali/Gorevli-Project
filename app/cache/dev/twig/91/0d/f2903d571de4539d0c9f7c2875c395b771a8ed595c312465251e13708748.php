<?php

/* TouchBundle:Anasayfa:login.html.twig */
class __TwigTemplate_910df2903d571de4539d0c9f7c2875c395b771a8ed595c312465251e13708748 extends Twig_Template
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
    <title>Touch Log-In</title>


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
        // line 66
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
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
        echo "    <div class=\"container\">
        <!-- Top Navigation -->
        <div class=\"codrops-top\">
            <a class=\"codrops-icon codrops-icon-prev\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("anasayfa");
        echo "\"><span>Homepage</span></a>
            <a class=\"codrops-icon codrops-icon-drop\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("reg");
        echo "\"><span>Register</span></a>
        </div>
        <header class=\"codrops-header\">
            <h1>Touch <span>Tutor's can get in touch their students</span></h1>
        </header>
        <section>

            <form id=\"theForm\" class=\"simform\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" autocomplete=\"off\">


                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"simform-inner\">
                    <ol class=\"questions\">
                        <li>
                            <span><label for=\"username\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
                        </li>
                        <li>
                            <span><label for=\"password\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                            <input type=\"password\" id=\"password\" name=\"_password\"/>
                        </li>

                    </ol><!-- /questions -->
                    <button class=\"submit\" type=\"submit\" id=\"_submit\" name=\"_submit\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    <div class=\"controls\">
                        <button class=\"next\"></button>
                        <div class=\"progress\"></div>
\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t<span class=\"number-current\"></span>
\t\t\t\t\t\t\t\t<span class=\"number-total\"></span>
\t\t\t\t\t\t\t</span>
                    <span class=\"error-message\">
                        ";
        // line 54
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 55
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 57
        echo "                    </span>
                    </div><!-- / controls -->
                </div><!-- /simform-inner -->
                <span class=\"final-message\"></span>
            </form><!-- /simform -->
        </section>
    </div><!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "TouchBundle:Anasayfa:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 57,  144 => 55,  142 => 54,  130 => 45,  122 => 40,  116 => 37,  112 => 36,  105 => 32,  99 => 29,  89 => 22,  85 => 21,  80 => 18,  77 => 17,  57 => 68,  53 => 67,  48 => 66,  46 => 17,  39 => 13,  35 => 12,  31 => 11,  20 => 2,);
    }
}
