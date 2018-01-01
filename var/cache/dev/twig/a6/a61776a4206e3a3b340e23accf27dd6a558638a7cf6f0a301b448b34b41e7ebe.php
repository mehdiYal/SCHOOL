<?php

/* :classesViews:listeEns.html.twig */
class __TwigTemplate_bf741774e3054d799b6305f412909f1d46da3b1367df375979ba096bcf87f557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", ":classesViews:listeEns.html.twig", 1);
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
        $__internal_c59893dc35d539aa85c4f3d24b664a8e3da1160bb222e1f0cdf3b6f03323f7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59893dc35d539aa85c4f3d24b664a8e3da1160bb222e1f0cdf3b6f03323f7c3->enter($__internal_c59893dc35d539aa85c4f3d24b664a8e3da1160bb222e1f0cdf3b6f03323f7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listeEns.html.twig"));

        $__internal_2d9d1d1508dfcdfe11d6dfa33ab5275d3455851a42973bdde5348d5e2100d6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9d1d1508dfcdfe11d6dfa33ab5275d3455851a42973bdde5348d5e2100d6e8->enter($__internal_2d9d1d1508dfcdfe11d6dfa33ab5275d3455851a42973bdde5348d5e2100d6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listeEns.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59893dc35d539aa85c4f3d24b664a8e3da1160bb222e1f0cdf3b6f03323f7c3->leave($__internal_c59893dc35d539aa85c4f3d24b664a8e3da1160bb222e1f0cdf3b6f03323f7c3_prof);

        
        $__internal_2d9d1d1508dfcdfe11d6dfa33ab5275d3455851a42973bdde5348d5e2100d6e8->leave($__internal_2d9d1d1508dfcdfe11d6dfa33ab5275d3455851a42973bdde5348d5e2100d6e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6057d26aadb3855a38aa96739f6f9aa05b450c2b88689cd560baddcfc2da14b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6057d26aadb3855a38aa96739f6f9aa05b450c2b88689cd560baddcfc2da14b6->enter($__internal_6057d26aadb3855a38aa96739f6f9aa05b450c2b88689cd560baddcfc2da14b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ce0c9b0f2157e4a2e1cd0e888ae6b561d0342fe3baa9bd50c1405423492cec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce0c9b0f2157e4a2e1cd0e888ae6b561d0342fe3baa9bd50c1405423492cec8->enter($__internal_3ce0c9b0f2157e4a2e1cd0e888ae6b561d0342fe3baa9bd50c1405423492cec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-content-wrap\">
         <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Les enseignants de la classe ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo " :</h3>
            </div>
             ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "ensMat", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 10
            echo "                <div class=\"col-md-4\">
                    <!-- CONTACT ITEM -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body profile\">
                            <div class=\"profile-image\">
                                <img src=\"";
            // line 15
            if ($this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "photo", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "nom", array()), "html", null, true);
            echo "\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "prenom", array()), "html", null, true);
            echo "</div>
                                <div class=\"profile-data-title\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                            </div>
                        </div>                                
                        <div class=\"panel-body\">                                    
                            <div class=\"contact-info\">
                                <p><small>Mobile</small><br/>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "telephone", array()), "html", null, true);
            echo "</p>
                                <p><small>Email</small><br/>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "email", array()), "html", null, true);
            echo "</p>
                                <p><small>Address</small><br/>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "adresse", array()), "html", null, true);
            echo "</p>
                                                                   
                            </div>
                        </div>                                
                    </div>
                    <!-- END CONTACT ITEM -->
                </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "         </div>           
    </div>

";
        
        $__internal_3ce0c9b0f2157e4a2e1cd0e888ae6b561d0342fe3baa9bd50c1405423492cec8->leave($__internal_3ce0c9b0f2157e4a2e1cd0e888ae6b561d0342fe3baa9bd50c1405423492cec8_prof);

        
        $__internal_6057d26aadb3855a38aa96739f6f9aa05b450c2b88689cd560baddcfc2da14b6->leave($__internal_6057d26aadb3855a38aa96739f6f9aa05b450c2b88689cd560baddcfc2da14b6_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:listeEns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  114 => 30,  110 => 29,  106 => 28,  98 => 23,  94 => 22,  88 => 19,  82 => 18,  70 => 15,  63 => 10,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
                <h3>Les enseignants de la classe {{classe.nom}} :</h3>
            </div>
             {% for mat in classe.ensMat %}
                <div class=\"col-md-4\">
                    <!-- CONTACT ITEM -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body profile\">
                            <div class=\"profile-image\">
                                <img src=\"{% if mat.enseignant.photo %}{{ asset('uploads/photos/' ~ mat.enseignant.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"{{mat.enseignant.nom}}\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">{{mat.enseignant.nom}} {{mat.enseignant.prenom}}</div>
                                <div class=\"profile-data-title\">{{mat.matiere.nom}}</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"{{ path('profileEnseignant',{'id':mat.enseignant.id})}}\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"{{ path('message_new',{'id':mat.enseignant.id}) }}\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                            </div>
                        </div>                                
                        <div class=\"panel-body\">                                    
                            <div class=\"contact-info\">
                                <p><small>Mobile</small><br/>{{mat.enseignant.telephone}}</p>
                                <p><small>Email</small><br/>{{mat.enseignant.email}}</p>
                                <p><small>Address</small><br/>{{mat.enseignant.adresse}}</p>
                                                                   
                            </div>
                        </div>                                
                    </div>
                    <!-- END CONTACT ITEM -->
                </div>
             {% endfor %}
         </div>           
    </div>

{% endblock %}", ":classesViews:listeEns.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/listeEns.html.twig");
    }
}
