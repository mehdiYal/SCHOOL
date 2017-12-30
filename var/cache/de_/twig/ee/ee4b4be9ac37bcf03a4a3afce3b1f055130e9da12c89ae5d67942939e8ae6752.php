<?php

/* :sallesViews:listSalles.html.twig */
class __TwigTemplate_51a1f8541d8e345d1adc0078bb24890b3265b68c081e855a2334eec2ab8e0be2 extends Twig_Template
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
        $__internal_3ba058082a5daf49514244d23f7c24f21a793f60768bc1a73de2b3a62d3ee503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba058082a5daf49514244d23f7c24f21a793f60768bc1a73de2b3a62d3ee503->enter($__internal_3ba058082a5daf49514244d23f7c24f21a793f60768bc1a73de2b3a62d3ee503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_d8eb2b372b9f9f8a2329e2985d20188cc202347db2d8f94128e6c3b43decf0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8eb2b372b9f9f8a2329e2985d20188cc202347db2d8f94128e6c3b43decf0a5->enter($__internal_d8eb2b372b9f9f8a2329e2985d20188cc202347db2d8f94128e6c3b43decf0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba058082a5daf49514244d23f7c24f21a793f60768bc1a73de2b3a62d3ee503->leave($__internal_3ba058082a5daf49514244d23f7c24f21a793f60768bc1a73de2b3a62d3ee503_prof);

        
        $__internal_d8eb2b372b9f9f8a2329e2985d20188cc202347db2d8f94128e6c3b43decf0a5->leave($__internal_d8eb2b372b9f9f8a2329e2985d20188cc202347db2d8f94128e6c3b43decf0a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d017b6e7dad82d1fe54b19d961ebc9328f354f6497923db7a4d7a50e0970b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d017b6e7dad82d1fe54b19d961ebc9328f354f6497923db7a4d7a50e0970b39->enter($__internal_7d017b6e7dad82d1fe54b19d961ebc9328f354f6497923db7a4d7a50e0970b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c77534f1260d04a3a181d28a424d4d54897e3504d035753b40994a3418e4d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c77534f1260d04a3a181d28a424d4d54897e3504d035753b40994a3418e4d0c->enter($__internal_8c77534f1260d04a3a181d28a424d4d54897e3504d035753b40994a3418e4d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_8c77534f1260d04a3a181d28a424d4d54897e3504d035753b40994a3418e4d0c->leave($__internal_8c77534f1260d04a3a181d28a424d4d54897e3504d035753b40994a3418e4d0c_prof);

        
        $__internal_7d017b6e7dad82d1fe54b19d961ebc9328f354f6497923db7a4d7a50e0970b39->leave($__internal_7d017b6e7dad82d1fe54b19d961ebc9328f354f6497923db7a4d7a50e0970b39_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_9f83916edd30b9e05d707d86253ac80de9ea0b5ae1b1d0f3b7881253bf03682b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f83916edd30b9e05d707d86253ac80de9ea0b5ae1b1d0f3b7881253bf03682b->enter($__internal_9f83916edd30b9e05d707d86253ac80de9ea0b5ae1b1d0f3b7881253bf03682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_8fe018edd2ff653546f02b44ab84ffd2f0ebd43b9cba7ee9c32f3deda17f5307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe018edd2ff653546f02b44ab84ffd2f0ebd43b9cba7ee9c32f3deda17f5307->enter($__internal_8fe018edd2ff653546f02b44ab84ffd2f0ebd43b9cba7ee9c32f3deda17f5307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_8fe018edd2ff653546f02b44ab84ffd2f0ebd43b9cba7ee9c32f3deda17f5307->leave($__internal_8fe018edd2ff653546f02b44ab84ffd2f0ebd43b9cba7ee9c32f3deda17f5307_prof);

        
        $__internal_9f83916edd30b9e05d707d86253ac80de9ea0b5ae1b1d0f3b7881253bf03682b->leave($__internal_9f83916edd30b9e05d707d86253ac80de9ea0b5ae1b1d0f3b7881253bf03682b_prof);

    }

    // line 43
    public function block_active($context, array $blocks = array())
    {
        $__internal_2cd180bb30b7c475bcc1dc697bd99b59c4b056fd2b5cbf8a8286f3889afc9f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd180bb30b7c475bcc1dc697bd99b59c4b056fd2b5cbf8a8286f3889afc9f26->enter($__internal_2cd180bb30b7c475bcc1dc697bd99b59c4b056fd2b5cbf8a8286f3889afc9f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_f99e8df5c1414884f3616f245469758403d1b4a198948d60d7f3df6b99f9c024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99e8df5c1414884f3616f245469758403d1b4a198948d60d7f3df6b99f9c024->enter($__internal_f99e8df5c1414884f3616f245469758403d1b4a198948d60d7f3df6b99f9c024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 44
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.salle').addClass('active');
        \$('.listSalle').addClass('active');
    </script>
";
        
        $__internal_f99e8df5c1414884f3616f245469758403d1b4a198948d60d7f3df6b99f9c024->leave($__internal_f99e8df5c1414884f3616f245469758403d1b4a198948d60d7f3df6b99f9c024_prof);

        
        $__internal_2cd180bb30b7c475bcc1dc697bd99b59c4b056fd2b5cbf8a8286f3889afc9f26->leave($__internal_2cd180bb30b7c475bcc1dc697bd99b59c4b056fd2b5cbf8a8286f3889afc9f26_prof);

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
{% endblock%}", ":sallesViews:listSalles.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/sallesViews/listSalles.html.twig");
    }
}
