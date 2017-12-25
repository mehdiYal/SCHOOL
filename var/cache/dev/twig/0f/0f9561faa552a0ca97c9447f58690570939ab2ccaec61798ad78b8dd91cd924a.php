<?php

/* sallesViews/listSalles.html.twig */
class __TwigTemplate_c012b3b699a59e4314c6b6557af9d225118b218d108962d156305e113147b710 extends Twig_Template
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
        $__internal_a36eeace71e81b227d657e79ff08f4baf1137410b0b20269d109dda9a5c9fccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36eeace71e81b227d657e79ff08f4baf1137410b0b20269d109dda9a5c9fccf->enter($__internal_a36eeace71e81b227d657e79ff08f4baf1137410b0b20269d109dda9a5c9fccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $__internal_88eb010a6925ce5e8b545ea64bd04dbd1bc0c7e2fca9d8054baeb91992beadca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88eb010a6925ce5e8b545ea64bd04dbd1bc0c7e2fca9d8054baeb91992beadca->enter($__internal_88eb010a6925ce5e8b545ea64bd04dbd1bc0c7e2fca9d8054baeb91992beadca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36eeace71e81b227d657e79ff08f4baf1137410b0b20269d109dda9a5c9fccf->leave($__internal_a36eeace71e81b227d657e79ff08f4baf1137410b0b20269d109dda9a5c9fccf_prof);

        
        $__internal_88eb010a6925ce5e8b545ea64bd04dbd1bc0c7e2fca9d8054baeb91992beadca->leave($__internal_88eb010a6925ce5e8b545ea64bd04dbd1bc0c7e2fca9d8054baeb91992beadca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a4e33aa083f0dde1e09240e6cbbbecfbae4e89278f91b7dacf7c2083aff7468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4e33aa083f0dde1e09240e6cbbbecfbae4e89278f91b7dacf7c2083aff7468->enter($__internal_8a4e33aa083f0dde1e09240e6cbbbecfbae4e89278f91b7dacf7c2083aff7468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3152bc551e0586b1e40deff8c9aa29e273a40ec56d8212a9b4d201c7947c5255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3152bc551e0586b1e40deff8c9aa29e273a40ec56d8212a9b4d201c7947c5255->enter($__internal_3152bc551e0586b1e40deff8c9aa29e273a40ec56d8212a9b4d201c7947c5255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_3152bc551e0586b1e40deff8c9aa29e273a40ec56d8212a9b4d201c7947c5255->leave($__internal_3152bc551e0586b1e40deff8c9aa29e273a40ec56d8212a9b4d201c7947c5255_prof);

        
        $__internal_8a4e33aa083f0dde1e09240e6cbbbecfbae4e89278f91b7dacf7c2083aff7468->leave($__internal_8a4e33aa083f0dde1e09240e6cbbbecfbae4e89278f91b7dacf7c2083aff7468_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_da14e6be3e3aa763494abf05290032df642c3e6385e1eb53c5b991391de7c03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da14e6be3e3aa763494abf05290032df642c3e6385e1eb53c5b991391de7c03a->enter($__internal_da14e6be3e3aa763494abf05290032df642c3e6385e1eb53c5b991391de7c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d5bbb5d96c13624fd5b2cdda187e1edd9560b17ca83b280a68c85f6527aa69b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bbb5d96c13624fd5b2cdda187e1edd9560b17ca83b280a68c85f6527aa69b1->enter($__internal_d5bbb5d96c13624fd5b2cdda187e1edd9560b17ca83b280a68c85f6527aa69b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "salles", array()));
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
        
        $__internal_d5bbb5d96c13624fd5b2cdda187e1edd9560b17ca83b280a68c85f6527aa69b1->leave($__internal_d5bbb5d96c13624fd5b2cdda187e1edd9560b17ca83b280a68c85f6527aa69b1_prof);

        
        $__internal_da14e6be3e3aa763494abf05290032df642c3e6385e1eb53c5b991391de7c03a->leave($__internal_da14e6be3e3aa763494abf05290032df642c3e6385e1eb53c5b991391de7c03a_prof);

    }

    // line 43
    public function block_active($context, array $blocks = array())
    {
        $__internal_d7bd6f03d94723aa978033c43db2540cc5150d9e3fdc3170c631b5a1d0064de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bd6f03d94723aa978033c43db2540cc5150d9e3fdc3170c631b5a1d0064de0->enter($__internal_d7bd6f03d94723aa978033c43db2540cc5150d9e3fdc3170c631b5a1d0064de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_8712ae4799e6bf1aae053547cc88435f7cb6d9155ca95a3ce077742bd265d791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8712ae4799e6bf1aae053547cc88435f7cb6d9155ca95a3ce077742bd265d791->enter($__internal_8712ae4799e6bf1aae053547cc88435f7cb6d9155ca95a3ce077742bd265d791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 44
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.salle').addClass('active');
        \$('.listSalle').addClass('active');
    </script>
";
        
        $__internal_8712ae4799e6bf1aae053547cc88435f7cb6d9155ca95a3ce077742bd265d791->leave($__internal_8712ae4799e6bf1aae053547cc88435f7cb6d9155ca95a3ce077742bd265d791_prof);

        
        $__internal_d7bd6f03d94723aa978033c43db2540cc5150d9e3fdc3170c631b5a1d0064de0->leave($__internal_d7bd6f03d94723aa978033c43db2540cc5150d9e3fdc3170c631b5a1d0064de0_prof);

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
{% endblock%}", "sallesViews/listSalles.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/sallesViews/listSalles.html.twig");
    }
}
