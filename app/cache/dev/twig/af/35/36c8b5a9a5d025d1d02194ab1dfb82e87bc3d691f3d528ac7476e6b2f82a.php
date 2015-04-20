<?php

/* TouchBundle:Dashboard/List:group.html.twig */
class __TwigTemplate_af3536c8b5a9a5d025d1d02194ab1dfb82e87bc3d691f3d528ac7476e6b2f82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TouchBundle:Dashboard:index.html.twig");
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
        return "TouchBundle:Dashboard:index.html.twig";
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



                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\"><span class=\"fa fa-group\"></span> Members</h3>
                        <div class=\"box-tools\">
                            <div class=\"input-group\">
                                <a href=\"#add\" class=\"label label-success\">Add member</a>
                                <input name=\"table_search\" class=\"form-control input-sm pull-right\" style=\"width: 150px;\" placeholder=\"Search\" type=\"text\">
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-default\"><i class=\"fa fa-search\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table table-hover\">
                            <tbody><tr>
                                <th>ID</th>
                                <th>Member Ad</th>
                                <th>Username</th>
                                <th>Mail</th>
                                <th>Message</th>



                            </tr>
                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grup"]) ? $context["grup"] : $this->getContext($context, "grup")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 42
            echo "                               ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["g"], "member", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 43
                echo "                                   <tr>
                                       <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "</td>
                                       <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "memberAd", array()), "html", null, true);
                echo "</td>
                                       <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                       <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "user", array()), "email", array()), "html", null, true);
                echo "</td>
                                       <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messageForm", array("id" => $this->getAttribute($this->getAttribute($context["m"], "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"label label-success\">Message</a></td>
                                   </tr>
                               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
                            </tbody></table>
                    </div><!-- /.box-body -->
                </div>

                <!-- Görev ekle -->
                <div class=\"box box-info \">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"><span class=\"fa fa-bullhorn\"></span> Publish Announcements</h3>
                            <div class=\"box-tools pull-right\">
                                <a href=\"#recent\" class=\"label label-success\">Recent announcements</a>
                                <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body\">
                            <form action=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("announcement");
        echo "\" method=\"post\">
                                <div class=\"form-group\">
                                    <input class=\"form-control\" id=\"baslik\" name=\"baslik\" required=\"required\" placeholder=\"Title of announcement\" type=\"text\">
                                </div>
                                <div class=\"form-group\">
                                   <textarea class=\"form-control\" id=\"duyuru\" placeholder=\"Your announcements is here..\" name=\"duyuru\"></textarea>
                                </div>
                                <div class=\"box-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Publish</button>
                                    ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grup"]) ? $context["grup"] : $this->getContext($context, "grup")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 77
            echo "                                        <input type=\"hidden\" id=\"grup\" name=\"grup\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "id", array()), "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                    <input type=\"hidden\" id=\"author\" name=\"author\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\">
                                </div>
                            </form>
                        </div><!-- /.box -->
                </div>
                <!-- Öğrenci ekle -->
                    <div id=\"add\" class=\"box box-warning collapsed-box \">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"><span class=\"fa fa-user\"></span>  Add member   </h3>
                            <div class=\"box-tools pull-right\">
                                <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body\">
                            <!-- form start -->
                            <form role=\"form\" action=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("add_member");
        echo "\" method=\"post\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <label for=\"kullaniciMail\">Email</label>
                                        <input class=\"form-control\" id=\"kullaniciMail\" name=\"kullaniciMail\" placeholder=\"E-Mail\" type=\"email\" required=\"required\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"kullaniciAdi\">Username</label>
                                        <input class=\"form-control\" id=\"kullaniciAdi\" name=\"kullaniciAdi\" placeholder=\"Kullanıcı adı\" type=\"text\" required=\"required\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"kullaniciAd\">Member Name</label>
                                        <input class=\"form-control\" id=\"kullaniciAd\" name=\"kullaniciAd\" placeholder=\"Ex; Ali Çalı\" type=\"text\" required=\"required\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"kullaniciSifre\">Password</label>
                                        <input class=\"form-control\" id=\"kullaniciSifre\" name=\"kullaniciSifre\" placeholder=\"Şifre\" type=\"password\" required=\"required\">
                                    </div>
                                    ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grup"]) ? $context["grup"] : $this->getContext($context, "grup")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 113
            echo "                                        <input type=\"hidden\" id=\"grup\" name=\"grup\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "id", array()), "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                    <input type=\"hidden\" id=\"member_leader\" name=\"member_leader\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\">


                                </div><!-- /.box-body -->

                                <div class=\"box-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>

                <div id=\"recent\"  class=\"box collapsed-box\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\"><span class=\"fa fa-bullhorn\"></span> Recent Announcements</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\"  data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div  class=\"box-body\">
                        ";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["duyuru"]) ? $context["duyuru"] : $this->getContext($context, "duyuru")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 136
            echo "                            <div class=\"box box-default box-solid collapsed-box\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">";
            // line 138
            echo $this->getAttribute($context["d"], "title", array());
            echo "</h3>
                                    <div class=\"box-tools pull-right\">
                                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                                        <button class=\"btn btn-box-tool\"  data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                    </div><!-- /.box-tools -->
                                </div><!-- /.box-header -->
                                <div style=\"display: none;\" class=\"box-body\">
                                    ";
            // line 145
            echo $this->getAttribute($context["d"], "announcement", array());
            echo "
                                </div><!-- /.box-body -->
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                    </div><!-- /.box-body -->
                </div>


            </section>
        </div><!-- /.row (main row) -->
    </section><!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "TouchBundle:Dashboard/List:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 149,  273 => 145,  263 => 138,  259 => 136,  255 => 135,  231 => 115,  222 => 113,  218 => 112,  197 => 94,  178 => 79,  169 => 77,  165 => 76,  153 => 67,  136 => 52,  130 => 51,  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  102 => 43,  97 => 42,  93 => 41,  59 => 9,  56 => 8,  45 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
