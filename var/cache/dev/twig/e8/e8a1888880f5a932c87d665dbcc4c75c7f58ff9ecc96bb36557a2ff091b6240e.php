<?php

/* default/dashParent.html.twig */
class __TwigTemplate_877ff27e758bfe2beedaa3ff101212158f4af44b6eaaf512add3dea598cdb022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", "default/dashParent.html.twig", 1);
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
        $__internal_32f967a8b986137a499e11b1f5d8141e8edf14a7d6dd0a177f13f2f1eab5386f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f967a8b986137a499e11b1f5d8141e8edf14a7d6dd0a177f13f2f1eab5386f->enter($__internal_32f967a8b986137a499e11b1f5d8141e8edf14a7d6dd0a177f13f2f1eab5386f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashParent.html.twig"));

        $__internal_c67e956f9effe727cc44c2ca362784d4b7423567cc91d1846b9f96e08210af8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67e956f9effe727cc44c2ca362784d4b7423567cc91d1846b9f96e08210af8f->enter($__internal_c67e956f9effe727cc44c2ca362784d4b7423567cc91d1846b9f96e08210af8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f967a8b986137a499e11b1f5d8141e8edf14a7d6dd0a177f13f2f1eab5386f->leave($__internal_32f967a8b986137a499e11b1f5d8141e8edf14a7d6dd0a177f13f2f1eab5386f_prof);

        
        $__internal_c67e956f9effe727cc44c2ca362784d4b7423567cc91d1846b9f96e08210af8f->leave($__internal_c67e956f9effe727cc44c2ca362784d4b7423567cc91d1846b9f96e08210af8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0d7163a0e1ed42714af21a847adb23ec5d120e0aae640b54c5d875100c36a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0d7163a0e1ed42714af21a847adb23ec5d120e0aae640b54c5d875100c36a6->enter($__internal_fe0d7163a0e1ed42714af21a847adb23ec5d120e0aae640b54c5d875100c36a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01527955f55e1e8dacea4d6ee610ae5fd3aaa49a320fff45f9b05b0d3ebc8da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01527955f55e1e8dacea4d6ee610ae5fd3aaa49a320fff45f9b05b0d3ebc8da2->enter($__internal_01527955f55e1e8dacea4d6ee610ae5fd3aaa49a320fff45f9b05b0d3ebc8da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-content-wrap\">
         <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Mes Enfants :</h3>
            </div>
             ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "eleves", array()));
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
        
        $__internal_01527955f55e1e8dacea4d6ee610ae5fd3aaa49a320fff45f9b05b0d3ebc8da2->leave($__internal_01527955f55e1e8dacea4d6ee610ae5fd3aaa49a320fff45f9b05b0d3ebc8da2_prof);

        
        $__internal_fe0d7163a0e1ed42714af21a847adb23ec5d120e0aae640b54c5d875100c36a6->leave($__internal_fe0d7163a0e1ed42714af21a847adb23ec5d120e0aae640b54c5d875100c36a6_prof);

    }

    public function getTemplateName()
    {
        return "default/dashParent.html.twig";
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

{% endblock %}", "default/dashParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/dashParent.html.twig");
    }
}
