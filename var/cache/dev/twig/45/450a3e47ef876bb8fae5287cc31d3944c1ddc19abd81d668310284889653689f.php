<?php

/* :default:dashParent.html.twig */
class __TwigTemplate_744b7818df24130368c432a8d7880bf4169e6cc252e413d8a7c34c47f7661d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", ":default:dashParent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59ff17b1b792e0f72d2000d245c1880db32dd99249117d8f8ea969b3023be0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ff17b1b792e0f72d2000d245c1880db32dd99249117d8f8ea969b3023be0ff->enter($__internal_59ff17b1b792e0f72d2000d245c1880db32dd99249117d8f8ea969b3023be0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashParent.html.twig"));

        $__internal_b6da83511ae998f74e3f02de03fca2c1982647c766f18dfcbb635febda788218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6da83511ae998f74e3f02de03fca2c1982647c766f18dfcbb635febda788218->enter($__internal_b6da83511ae998f74e3f02de03fca2c1982647c766f18dfcbb635febda788218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ff17b1b792e0f72d2000d245c1880db32dd99249117d8f8ea969b3023be0ff->leave($__internal_59ff17b1b792e0f72d2000d245c1880db32dd99249117d8f8ea969b3023be0ff_prof);

        
        $__internal_b6da83511ae998f74e3f02de03fca2c1982647c766f18dfcbb635febda788218->leave($__internal_b6da83511ae998f74e3f02de03fca2c1982647c766f18dfcbb635febda788218_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16a063c6b2ee5d7902c8e8a6c71a16c9c37461d758120bc2c854c081c9704e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a063c6b2ee5d7902c8e8a6c71a16c9c37461d758120bc2c854c081c9704e2f->enter($__internal_16a063c6b2ee5d7902c8e8a6c71a16c9c37461d758120bc2c854c081c9704e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5b557932ef0393200a81a5038c8fa8f90d93258fc5d3e767ca9e7116f67af25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b557932ef0393200a81a5038c8fa8f90d93258fc5d3e767ca9e7116f67af25->enter($__internal_d5b557932ef0393200a81a5038c8fa8f90d93258fc5d3e767ca9e7116f67af25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-content-wrap\">
         <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Mes Enfants :</h3>
            </div>
             ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 10
            echo "                <div class=\"col-md-4\">
                    <!-- CONTACT ITEM -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body profile\">
                            <div class=\"profile-image\">
                                <img src=\"";
            // line 15
            if ($this->getAttribute($context["eleve"], "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["eleve"], "photo", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo "\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</div>
                                <div class=\"profile-data-title\">Eleve</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                            </div>
                        </div>                                
                        <div class=\"panel-body\">                                    
                            <div class=\"contact-info\">
                                <p><small>Ecole</small><br/><a href=\"\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "ecole", array()), "nom", array()), "html", null, true);
            echo "</a></p>
                                <p><small>Année</small><br/>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</p>
                                <p><small>Classe</small><br/>
                                ";
            // line 31
            if ($this->getAttribute($context["eleve"], "classe", array())) {
                // line 32
                echo "                                <a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_listeEns", array("id" => $this->getAttribute($this->getAttribute($context["eleve"], "classe", array()), "id", array()))), "html", null, true);
                echo " \">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "classe", array()), "nom", array()), "html", null, true);
                echo " <span class=\"label label-danger pull-right\"\">Nouvelles informations</span> </a></p>
                                <p><small><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_show_class", array("id" => $this->getAttribute($this->getAttribute($context["eleve"], "classe", array()), "id", array()))), "html", null, true);
                echo "\">Emploie du temps</a></small></p>
                                <p><small><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve_absence", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
                echo "\">Retards & absenses</a></small></p>
                                <p><small><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_listeEns", array("id" => $this->getAttribute($this->getAttribute($context["eleve"], "classe", array()), "id", array()))), "html", null, true);
                echo "\">Liste des enseignants</a></small></p>
                                <p><small><a href=\"\">Liste des evaluations</a></small></p>
                                <p><small><a href=\"\">Ressources pédagogique</a></small></p>
                                <p><small><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ecole_cantineTrans", array("id" => $this->getAttribute($this->getAttribute($context["eleve"], "ecole", array()), "id", array()))), "html", null, true);
                echo "\">Cantine & transports</a></small></p>
                                ";
            } else {
                // line 39
                echo " Pas de classe pour l'instant<p/>";
            }
            // line 40
            echo "                                                                   
                            </div>
                        </div>                                
                    </div>
                    <!-- END CONTACT ITEM -->
                </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "         </div>           
    </div>

";
        
        $__internal_d5b557932ef0393200a81a5038c8fa8f90d93258fc5d3e767ca9e7116f67af25->leave($__internal_d5b557932ef0393200a81a5038c8fa8f90d93258fc5d3e767ca9e7116f67af25_prof);

        
        $__internal_16a063c6b2ee5d7902c8e8a6c71a16c9c37461d758120bc2c854c081c9704e2f->leave($__internal_16a063c6b2ee5d7902c8e8a6c71a16c9c37461d758120bc2c854c081c9704e2f_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 47,  142 => 40,  139 => 39,  134 => 38,  128 => 35,  124 => 34,  120 => 33,  113 => 32,  111 => 31,  104 => 29,  100 => 28,  92 => 23,  88 => 22,  79 => 18,  67 => 15,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseParent.html.twig' %}

{% block body %}
    <div class=\"page-content-wrap\">
         <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Mes Enfants :</h3>
            </div>
             {% for eleve in app.user.eleves %}
                <div class=\"col-md-4\">
                    <!-- CONTACT ITEM -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body profile\">
                            <div class=\"profile-image\">
                                <img src=\"{% if eleve.photo %}{{ asset('uploads/photos/' ~ eleve.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"{{eleve.nom}}\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">{{eleve.nom}} {{eleve.prenom}}</div>
                                <div class=\"profile-data-title\">Eleve</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"{{ path('profileEleve',{'id':eleve.id})}}\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"{{ path('message_new',{'id':eleve.id}) }}\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                            </div>
                        </div>                                
                        <div class=\"panel-body\">                                    
                            <div class=\"contact-info\">
                                <p><small>Ecole</small><br/><a href=\"\">{{eleve.ecole.nom}}</a></p>
                                <p><small>Année</small><br/>{{eleve.annee.nom}} {{eleve.annee.niveau}}</p>
                                <p><small>Classe</small><br/>
                                {% if eleve.classe%}
                                <a href=\" {{ path ('classe_listeEns',{'id':eleve.classe.id})}} \">{{eleve.classe.nom}} <span class=\"label label-danger pull-right\"\">Nouvelles informations</span> </a></p>
                                <p><small><a href=\"{{path('program_show_class',{'id':eleve.classe.id})}}\">Emploie du temps</a></small></p>
                                <p><small><a href=\"{{ path('eleve_absence',{'id':eleve.id}) }}\">Retards & absenses</a></small></p>
                                <p><small><a href=\"{{ path ('classe_listeEns',{'id':eleve.classe.id})}}\">Liste des enseignants</a></small></p>
                                <p><small><a href=\"\">Liste des evaluations</a></small></p>
                                <p><small><a href=\"\">Ressources pédagogique</a></small></p>
                                <p><small><a href=\"{{ path ('ecole_cantineTrans',{'id':eleve.ecole.id})}}\">Cantine & transports</a></small></p>
                                {%else%} Pas de classe pour l'instant<p/>{% endif%}
                                                                   
                            </div>
                        </div>                                
                    </div>
                    <!-- END CONTACT ITEM -->
                </div>
             {% endfor %}
         </div>           
    </div>

{% endblock %}", ":default:dashParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/dashParent.html.twig");
    }
}
