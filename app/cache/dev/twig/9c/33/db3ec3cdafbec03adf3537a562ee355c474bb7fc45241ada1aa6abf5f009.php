<?php

/* TouchBundle:Own/List:group.html.twig */
class __TwigTemplate_9c33db3ec3cdafbec03adf3537a562ee355c474bb7fc45241ada1aa6abf5f009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TouchBundle:Own:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'icerik' => array($this, 'block_icerik'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TouchBundle:Own:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grup"]) ? $context["grup"] : $this->getContext($context, "grup")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "grupAd", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 8
    public function block_icerik($context, array $blocks = array())
    {
        // line 9
        echo "
    <section class=\"content\">
        <div class=\"row\">
            <section class=\"col-lg-7 connectedSortable ui-sortable\">


                <div id=\"recent\"  class=\"box\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\"><span class=\"fa fa-bullhorn\"></span> Recent Announcements</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\"  data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div  class=\"box-body\">
                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["duyuru"]) ? $context["duyuru"] : $this->getContext($context, "duyuru")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 24
            echo "                            <div class=\"box box-default box-solid collapsed-box\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">";
            // line 26
            echo $this->getAttribute($context["d"], "title", array());
            echo "</h3>
                                    <div class=\"box-tools pull-right\">
                                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                                        <button class=\"btn btn-box-tool\"  data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                    </div><!-- /.box-tools -->
                                </div><!-- /.box-header -->
                                <div style=\"display: none;\" class=\"box-body\">
                                    ";
            // line 33
            echo $this->getAttribute($context["d"], "announcement", array());
            echo "
                                </div><!-- /.box-body -->
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </div><!-- /.box-body -->
                </div>


            </section>
        </div><!-- /.row (main row) -->
    </section><!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "TouchBundle:Own/List:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  93 => 33,  83 => 26,  79 => 24,  75 => 23,  59 => 9,  56 => 8,  45 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
