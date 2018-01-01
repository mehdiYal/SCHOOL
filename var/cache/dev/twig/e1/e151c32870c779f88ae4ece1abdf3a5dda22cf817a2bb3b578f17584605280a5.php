<?php

/* :elevesViews:listEleves.html.twig */
class __TwigTemplate_a0b1e34ff025c08f10c89de66c6335d58eafbde135d0a6e6742035777cd724a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":elevesViews:listEleves.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4b217d8748a39ff16974691cc9445f0d359adb95cbffec6c95c439b033717e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b217d8748a39ff16974691cc9445f0d359adb95cbffec6c95c439b033717e0->enter($__internal_c4b217d8748a39ff16974691cc9445f0d359adb95cbffec6c95c439b033717e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $__internal_f300e389ff3e4e5cb184edcdbef6cb55827a15617c4298d436de10f5735bb3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f300e389ff3e4e5cb184edcdbef6cb55827a15617c4298d436de10f5735bb3c6->enter($__internal_f300e389ff3e4e5cb184edcdbef6cb55827a15617c4298d436de10f5735bb3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b217d8748a39ff16974691cc9445f0d359adb95cbffec6c95c439b033717e0->leave($__internal_c4b217d8748a39ff16974691cc9445f0d359adb95cbffec6c95c439b033717e0_prof);

        
        $__internal_f300e389ff3e4e5cb184edcdbef6cb55827a15617c4298d436de10f5735bb3c6->leave($__internal_f300e389ff3e4e5cb184edcdbef6cb55827a15617c4298d436de10f5735bb3c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec8b85888a9bb0d064cbfb448a2251e3b348148443acfffca5f6704d98e512af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8b85888a9bb0d064cbfb448a2251e3b348148443acfffca5f6704d98e512af->enter($__internal_ec8b85888a9bb0d064cbfb448a2251e3b348148443acfffca5f6704d98e512af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6f809133b02c34ce6ab35c504a90ad5669a5713da66715a7c5d43741ac6ce01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f809133b02c34ce6ab35c504a90ad5669a5713da66715a7c5d43741ac6ce01->enter($__internal_c6f809133b02c34ce6ab35c504a90ad5669a5713da66715a7c5d43741ac6ce01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_c6f809133b02c34ce6ab35c504a90ad5669a5713da66715a7c5d43741ac6ce01->leave($__internal_c6f809133b02c34ce6ab35c504a90ad5669a5713da66715a7c5d43741ac6ce01_prof);

        
        $__internal_ec8b85888a9bb0d064cbfb448a2251e3b348148443acfffca5f6704d98e512af->leave($__internal_ec8b85888a9bb0d064cbfb448a2251e3b348148443acfffca5f6704d98e512af_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_5c7400e7bd1b3dca2d2df3858426bd0f4d012b5333f05ccf44a87d4c4bd027d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7400e7bd1b3dca2d2df3858426bd0f4d012b5333f05ccf44a87d4c4bd027d3->enter($__internal_5c7400e7bd1b3dca2d2df3858426bd0f4d012b5333f05ccf44a87d4c4bd027d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_8d257fc70fbfe57442f350c75f4415cb25093c98e2b823d5290403a60c1df4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d257fc70fbfe57442f350c75f4415cb25093c98e2b823d5290403a60c1df4e3->enter($__internal_8d257fc70fbfe57442f350c75f4415cb25093c98e2b823d5290403a60c1df4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parent"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 24
            echo "\t\t\t\t\t<tr class=\"";
            if (($this->getAttribute($context["eleve"], "parent", array()) == null)) {
                echo " danger ";
            }
            echo "\">
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["eleve"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["eleve"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parentEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>                                    
    </div>
    ";
        // line 53
        $this->displayBlock('active', $context, $blocks);
        
        $__internal_8d257fc70fbfe57442f350c75f4415cb25093c98e2b823d5290403a60c1df4e3->leave($__internal_8d257fc70fbfe57442f350c75f4415cb25093c98e2b823d5290403a60c1df4e3_prof);

        
        $__internal_5c7400e7bd1b3dca2d2df3858426bd0f4d012b5333f05ccf44a87d4c4bd027d3->leave($__internal_5c7400e7bd1b3dca2d2df3858426bd0f4d012b5333f05ccf44a87d4c4bd027d3_prof);

    }

    public function block_active($context, array $blocks = array())
    {
        $__internal_36a411723ea422995b7c414de0e3c8f09c0f460294aa5993d10150d1072672e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a411723ea422995b7c414de0e3c8f09c0f460294aa5993d10150d1072672e7->enter($__internal_36a411723ea422995b7c414de0e3c8f09c0f460294aa5993d10150d1072672e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_309aedc6822b64f58237126b0e1549d8bd27dae9bd967259b6b4a42f1d072b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309aedc6822b64f58237126b0e1549d8bd27dae9bd967259b6b4a42f1d072b96->enter($__internal_309aedc6822b64f58237126b0e1549d8bd27dae9bd967259b6b4a42f1d072b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 54
        echo "    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    ";
        
        $__internal_309aedc6822b64f58237126b0e1549d8bd27dae9bd967259b6b4a42f1d072b96->leave($__internal_309aedc6822b64f58237126b0e1549d8bd27dae9bd967259b6b4a42f1d072b96_prof);

        
        $__internal_36a411723ea422995b7c414de0e3c8f09c0f460294aa5993d10150d1072672e7->leave($__internal_36a411723ea422995b7c414de0e3c8f09c0f460294aa5993d10150d1072672e7_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:listEleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 54,  173 => 53,  168 => 50,  156 => 44,  148 => 39,  140 => 34,  132 => 29,  125 => 27,  121 => 26,  115 => 25,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t{{'list'|trans}} {{'students'|trans}}
{% endblock %}

{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                    <th>{{'parent'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for eleve in app.user.ecole.eleves %}
\t\t\t\t\t<tr class=\"{% if (eleve.parent == null)%} danger {% endif %}\">
\t\t\t\t\t\t<td>{{ eleve.nom|upper}} {{ eleve.prenom}}</td>
\t\t\t\t\t\t<td>{{ (\"now\"|date(\"Y\"))-( eleve.dateDeNaissance|date(\"Y\"))}}</td>
\t\t\t\t\t\t<td>{{ eleve.annee.nom}} {{ eleve.annee.niveau}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('parentEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    {% block active %}
    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    {% endblock%}
{% endblock %}               
", ":elevesViews:listEleves.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/elevesViews/listEleves.html.twig");
    }
}
