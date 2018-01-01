<?php

/* :sallesViews:listSalles.html.twig */
class __TwigTemplate_970d44ee7050e7ee3716fc28f97a68a660e8e46980bf8f7792c488e5941dba21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":sallesViews:listSalles.html.twig", 1);
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
        $__internal_07ade04469e02d1c7c24cb4eb203b45d6c0ed4971b726d8b3fe22f761cd39fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ade04469e02d1c7c24cb4eb203b45d6c0ed4971b726d8b3fe22f761cd39fe9->enter($__internal_07ade04469e02d1c7c24cb4eb203b45d6c0ed4971b726d8b3fe22f761cd39fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_c444057cbdbf22d6535d49ff771a8dd711c84fe44b293d1df63be1c4d2ef4e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c444057cbdbf22d6535d49ff771a8dd711c84fe44b293d1df63be1c4d2ef4e1c->enter($__internal_c444057cbdbf22d6535d49ff771a8dd711c84fe44b293d1df63be1c4d2ef4e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07ade04469e02d1c7c24cb4eb203b45d6c0ed4971b726d8b3fe22f761cd39fe9->leave($__internal_07ade04469e02d1c7c24cb4eb203b45d6c0ed4971b726d8b3fe22f761cd39fe9_prof);

        
        $__internal_c444057cbdbf22d6535d49ff771a8dd711c84fe44b293d1df63be1c4d2ef4e1c->leave($__internal_c444057cbdbf22d6535d49ff771a8dd711c84fe44b293d1df63be1c4d2ef4e1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99925bc1f80ffabeae42f900fac003e7165ffe422e07e572b2ec2335a8fffbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99925bc1f80ffabeae42f900fac003e7165ffe422e07e572b2ec2335a8fffbf1->enter($__internal_99925bc1f80ffabeae42f900fac003e7165ffe422e07e572b2ec2335a8fffbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a3e5b93f0d1b3f63de107b6b29bf9dee079c725695c4d7210ff66fdd6cb425b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3e5b93f0d1b3f63de107b6b29bf9dee079c725695c4d7210ff66fdd6cb425b->enter($__internal_3a3e5b93f0d1b3f63de107b6b29bf9dee079c725695c4d7210ff66fdd6cb425b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_3a3e5b93f0d1b3f63de107b6b29bf9dee079c725695c4d7210ff66fdd6cb425b->leave($__internal_3a3e5b93f0d1b3f63de107b6b29bf9dee079c725695c4d7210ff66fdd6cb425b_prof);

        
        $__internal_99925bc1f80ffabeae42f900fac003e7165ffe422e07e572b2ec2335a8fffbf1->leave($__internal_99925bc1f80ffabeae42f900fac003e7165ffe422e07e572b2ec2335a8fffbf1_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_f16c48455df590dc3699a313876cfff75f79c7bca517c052303c83c89bdaa7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16c48455df590dc3699a313876cfff75f79c7bca517c052303c83c89bdaa7c3->enter($__internal_f16c48455df590dc3699a313876cfff75f79c7bca517c052303c83c89bdaa7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_abfaa1c9865867299eb23bf68fd483dbf2cc55d75998c074048e33d41ea5d075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfaa1c9865867299eb23bf68fd483dbf2cc55d75998c074048e33d41ea5d075->enter($__internal_abfaa1c9865867299eb23bf68fd483dbf2cc55d75998c074048e33d41ea5d075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "salles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["salle"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "capacite", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "equipement", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_abfaa1c9865867299eb23bf68fd483dbf2cc55d75998c074048e33d41ea5d075->leave($__internal_abfaa1c9865867299eb23bf68fd483dbf2cc55d75998c074048e33d41ea5d075_prof);

        
        $__internal_f16c48455df590dc3699a313876cfff75f79c7bca517c052303c83c89bdaa7c3->leave($__internal_f16c48455df590dc3699a313876cfff75f79c7bca517c052303c83c89bdaa7c3_prof);

    }

    // line 43
    public function block_active($context, array $blocks = array())
    {
        $__internal_3fdf3520a301524f21a56ddec1fe7db0041b376339821eb2f0bc8c7051bf5881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdf3520a301524f21a56ddec1fe7db0041b376339821eb2f0bc8c7051bf5881->enter($__internal_3fdf3520a301524f21a56ddec1fe7db0041b376339821eb2f0bc8c7051bf5881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_66253dfb2c3102f527123e1f1a3447b8d38984e6305027b82321b2ca3e21ca85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66253dfb2c3102f527123e1f1a3447b8d38984e6305027b82321b2ca3e21ca85->enter($__internal_66253dfb2c3102f527123e1f1a3447b8d38984e6305027b82321b2ca3e21ca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 44
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.salle').addClass('active');
        \$('.listSalle').addClass('active');
    </script>
";
        
        $__internal_66253dfb2c3102f527123e1f1a3447b8d38984e6305027b82321b2ca3e21ca85->leave($__internal_66253dfb2c3102f527123e1f1a3447b8d38984e6305027b82321b2ca3e21ca85_prof);

        
        $__internal_3fdf3520a301524f21a56ddec1fe7db0041b376339821eb2f0bc8c7051bf5881->leave($__internal_3fdf3520a301524f21a56ddec1fe7db0041b376339821eb2f0bc8c7051bf5881_prof);

    }

    public function getTemplateName()
    {
        return ":sallesViews:listSalles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 44,  149 => 43,  136 => 39,  124 => 33,  116 => 28,  111 => 26,  107 => 25,  103 => 24,  100 => 23,  96 => 22,  89 => 18,  85 => 17,  75 => 9,  66 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'salles'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for salle in app.user.ecole.salles%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ salle.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ salle.capacite}}</td>
\t\t\t\t\t\t<td>{{ salle.equipement}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
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
        \$('.salle').addClass('active');
        \$('.listSalle').addClass('active');
    </script>
{% endblock%}", ":sallesViews:listSalles.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/sallesViews/listSalles.html.twig");
    }
}
