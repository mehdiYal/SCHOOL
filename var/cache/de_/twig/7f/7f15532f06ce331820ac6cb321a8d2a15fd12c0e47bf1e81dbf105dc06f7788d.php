<?php

/* sallesViews/listSalles.html.twig */
class __TwigTemplate_8783f01f3bf4da45e0be5eefb20ceba056b95223183d5a608b95725a46b93ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "sallesViews/listSalles.html.twig", 1);
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
        $__internal_0e93890101597d5699306af277bab19f820dbe2c9756eb792547222c64ee79d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e93890101597d5699306af277bab19f820dbe2c9756eb792547222c64ee79d6->enter($__internal_0e93890101597d5699306af277bab19f820dbe2c9756eb792547222c64ee79d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $__internal_1748f166e1842372f75630d2b8d698b637f274f87176a1bff2c6c3b6cd4b5ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1748f166e1842372f75630d2b8d698b637f274f87176a1bff2c6c3b6cd4b5ad1->enter($__internal_1748f166e1842372f75630d2b8d698b637f274f87176a1bff2c6c3b6cd4b5ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e93890101597d5699306af277bab19f820dbe2c9756eb792547222c64ee79d6->leave($__internal_0e93890101597d5699306af277bab19f820dbe2c9756eb792547222c64ee79d6_prof);

        
        $__internal_1748f166e1842372f75630d2b8d698b637f274f87176a1bff2c6c3b6cd4b5ad1->leave($__internal_1748f166e1842372f75630d2b8d698b637f274f87176a1bff2c6c3b6cd4b5ad1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e3469aff515676045eed079122e0c584ef083caec2cb7aab87851ca4238a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e3469aff515676045eed079122e0c584ef083caec2cb7aab87851ca4238a7c->enter($__internal_d1e3469aff515676045eed079122e0c584ef083caec2cb7aab87851ca4238a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7920ac382d48dfb9c482f0dee0e03941ff696f3096d805dab85fba2e95f7492f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7920ac382d48dfb9c482f0dee0e03941ff696f3096d805dab85fba2e95f7492f->enter($__internal_7920ac382d48dfb9c482f0dee0e03941ff696f3096d805dab85fba2e95f7492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_7920ac382d48dfb9c482f0dee0e03941ff696f3096d805dab85fba2e95f7492f->leave($__internal_7920ac382d48dfb9c482f0dee0e03941ff696f3096d805dab85fba2e95f7492f_prof);

        
        $__internal_d1e3469aff515676045eed079122e0c584ef083caec2cb7aab87851ca4238a7c->leave($__internal_d1e3469aff515676045eed079122e0c584ef083caec2cb7aab87851ca4238a7c_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_abc05cf36ce9ca7cfcc59c5ed4843b3cc6c0af42643709d970cb9a8ed2627218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc05cf36ce9ca7cfcc59c5ed4843b3cc6c0af42643709d970cb9a8ed2627218->enter($__internal_abc05cf36ce9ca7cfcc59c5ed4843b3cc6c0af42643709d970cb9a8ed2627218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_2f7d2274a7bb878cd664804a4d986b8ace2ad0646ab6bb661570a3072ddb2166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7d2274a7bb878cd664804a4d986b8ace2ad0646ab6bb661570a3072ddb2166->enter($__internal_2f7d2274a7bb878cd664804a4d986b8ace2ad0646ab6bb661570a3072ddb2166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_2f7d2274a7bb878cd664804a4d986b8ace2ad0646ab6bb661570a3072ddb2166->leave($__internal_2f7d2274a7bb878cd664804a4d986b8ace2ad0646ab6bb661570a3072ddb2166_prof);

        
        $__internal_abc05cf36ce9ca7cfcc59c5ed4843b3cc6c0af42643709d970cb9a8ed2627218->leave($__internal_abc05cf36ce9ca7cfcc59c5ed4843b3cc6c0af42643709d970cb9a8ed2627218_prof);

    }

    // line 43
    public function block_active($context, array $blocks = array())
    {
        $__internal_3c26297fdf4258672c9f836c0284ea954defffb64558bc4b6f83a5599d4253dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c26297fdf4258672c9f836c0284ea954defffb64558bc4b6f83a5599d4253dd->enter($__internal_3c26297fdf4258672c9f836c0284ea954defffb64558bc4b6f83a5599d4253dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_83298d3854689eaccde0245fe9aa0d18a7fcff9279e90e6ccb4f87e387c5a382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83298d3854689eaccde0245fe9aa0d18a7fcff9279e90e6ccb4f87e387c5a382->enter($__internal_83298d3854689eaccde0245fe9aa0d18a7fcff9279e90e6ccb4f87e387c5a382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 44
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.salle').addClass('active');
        \$('.listSalle').addClass('active');
    </script>
";
        
        $__internal_83298d3854689eaccde0245fe9aa0d18a7fcff9279e90e6ccb4f87e387c5a382->leave($__internal_83298d3854689eaccde0245fe9aa0d18a7fcff9279e90e6ccb4f87e387c5a382_prof);

        
        $__internal_3c26297fdf4258672c9f836c0284ea954defffb64558bc4b6f83a5599d4253dd->leave($__internal_3c26297fdf4258672c9f836c0284ea954defffb64558bc4b6f83a5599d4253dd_prof);

    }

    public function getTemplateName()
    {
        return "sallesViews/listSalles.html.twig";
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
{% endblock%}", "sallesViews/listSalles.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\sallesViews\\listSalles.html.twig");
    }
}
