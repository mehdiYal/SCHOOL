<?php

/* :classesViews:listClasses.html.twig */
class __TwigTemplate_4a928486ddd020b0d2ab5e7b0c4e47dcf1b25afff637359e8319c77aeeccb279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":classesViews:listClasses.html.twig", 1);
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
        $__internal_0a122070f7c3b30df55fea21964ddb277f353fac1e8eca26f2a19c432323da62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a122070f7c3b30df55fea21964ddb277f353fac1e8eca26f2a19c432323da62->enter($__internal_0a122070f7c3b30df55fea21964ddb277f353fac1e8eca26f2a19c432323da62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $__internal_053cc8b8edc751db6fe1bf6e91f9e052b419ef42f1c95a2962314f4547e3fb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053cc8b8edc751db6fe1bf6e91f9e052b419ef42f1c95a2962314f4547e3fb74->enter($__internal_053cc8b8edc751db6fe1bf6e91f9e052b419ef42f1c95a2962314f4547e3fb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a122070f7c3b30df55fea21964ddb277f353fac1e8eca26f2a19c432323da62->leave($__internal_0a122070f7c3b30df55fea21964ddb277f353fac1e8eca26f2a19c432323da62_prof);

        
        $__internal_053cc8b8edc751db6fe1bf6e91f9e052b419ef42f1c95a2962314f4547e3fb74->leave($__internal_053cc8b8edc751db6fe1bf6e91f9e052b419ef42f1c95a2962314f4547e3fb74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac8974b50f42b5ee9e65bcf5789e3071f2dc2fc50664f33c88398fef8a0472fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8974b50f42b5ee9e65bcf5789e3071f2dc2fc50664f33c88398fef8a0472fe->enter($__internal_ac8974b50f42b5ee9e65bcf5789e3071f2dc2fc50664f33c88398fef8a0472fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0f14f020d90f7c6056a4cdb98d0af6997e61ec6d10278ad0940bf3273a2a16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f14f020d90f7c6056a4cdb98d0af6997e61ec6d10278ad0940bf3273a2a16f->enter($__internal_e0f14f020d90f7c6056a4cdb98d0af6997e61ec6d10278ad0940bf3273a2a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_e0f14f020d90f7c6056a4cdb98d0af6997e61ec6d10278ad0940bf3273a2a16f->leave($__internal_e0f14f020d90f7c6056a4cdb98d0af6997e61ec6d10278ad0940bf3273a2a16f_prof);

        
        $__internal_ac8974b50f42b5ee9e65bcf5789e3071f2dc2fc50664f33c88398fef8a0472fe->leave($__internal_ac8974b50f42b5ee9e65bcf5789e3071f2dc2fc50664f33c88398fef8a0472fe_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_8359cf1417a4aedaca5e3a6fc7fbe95224172e1453c8dfa055bc89a4c04954f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8359cf1417a4aedaca5e3a6fc7fbe95224172e1453c8dfa055bc89a4c04954f5->enter($__internal_8359cf1417a4aedaca5e3a6fc7fbe95224172e1453c8dfa055bc89a4c04954f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_f06f0702e282b6102f5696bb05202e5b5bb1219d8c757beae604d497b68f94b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06f0702e282b6102f5696bb05202e5b5bb1219d8c757beae604d497b68f94b8->enter($__internal_f06f0702e282b6102f5696bb05202e5b5bb1219d8c757beae604d497b68f94b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Eleves</th>
                    <th>Responsable</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>Aff Ens.</th>
                    <th>Aff Eleves</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["classe"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "responsable", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectProf", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectEleves", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-users\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_f06f0702e282b6102f5696bb05202e5b5bb1219d8c757beae604d497b68f94b8->leave($__internal_f06f0702e282b6102f5696bb05202e5b5bb1219d8c757beae604d497b68f94b8_prof);

        
        $__internal_8359cf1417a4aedaca5e3a6fc7fbe95224172e1453c8dfa055bc89a4c04954f5->leave($__internal_8359cf1417a4aedaca5e3a6fc7fbe95224172e1453c8dfa055bc89a4c04954f5_prof);

    }

    // line 59
    public function block_active($context, array $blocks = array())
    {
        $__internal_62542fca49c1bb991443765ada569d136ccfdb414ff372aef865cffafb10bf94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62542fca49c1bb991443765ada569d136ccfdb414ff372aef865cffafb10bf94->enter($__internal_62542fca49c1bb991443765ada569d136ccfdb414ff372aef865cffafb10bf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_a59bb03cced299f2360abf644b9d25542753e39b85b5e1b5dce9860477f1c6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59bb03cced299f2360abf644b9d25542753e39b85b5e1b5dce9860477f1c6d4->enter($__internal_a59bb03cced299f2360abf644b9d25542753e39b85b5e1b5dce9860477f1c6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 60
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.listCl').addClass('active');
    </script>
";
        
        $__internal_a59bb03cced299f2360abf644b9d25542753e39b85b5e1b5dce9860477f1c6d4->leave($__internal_a59bb03cced299f2360abf644b9d25542753e39b85b5e1b5dce9860477f1c6d4_prof);

        
        $__internal_62542fca49c1bb991443765ada569d136ccfdb414ff372aef865cffafb10bf94->leave($__internal_62542fca49c1bb991443765ada569d136ccfdb414ff372aef865cffafb10bf94_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 60,  179 => 59,  166 => 55,  154 => 49,  146 => 44,  138 => 39,  130 => 34,  125 => 32,  121 => 31,  115 => 30,  111 => 29,  107 => 28,  104 => 27,  100 => 26,  91 => 20,  87 => 19,  75 => 9,  66 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'classe'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Eleves</th>
                    <th>Responsable</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>Aff Ens.</th>
                    <th>Aff Eleves</th>
                </tr>
            </thead>
            <tbody>
                {% for classe in app.user.ecole.classes%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ classe.description}}</td>
\t\t\t\t\t\t<td>{{ classe.annee.nom}} {{ classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{ classe.eleves|length}}</td>
\t\t\t\t\t\t<td>{{ classe.responsable.nom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectProf',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectEleves',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-users\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}  
{% block active %}
    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.listCl').addClass('active');
    </script>
{% endblock%}", ":classesViews:listClasses.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
