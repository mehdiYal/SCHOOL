<?php

/* classesViews/listClasses.html.twig */
class __TwigTemplate_c31ba3debd44554d271cb2269aacfe688fc3f16d5f41542fa9a4edc3d3c792c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "classesViews/listClasses.html.twig", 1);
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
        $__internal_bedba83c69b37ea74119141c068e52db6afd1abc0905e852f9f460fd2d9729e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedba83c69b37ea74119141c068e52db6afd1abc0905e852f9f460fd2d9729e2->enter($__internal_bedba83c69b37ea74119141c068e52db6afd1abc0905e852f9f460fd2d9729e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_770be31e60632b819cb66eb14360d5e2c0c3d00301577783c2875f9d38e6757c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770be31e60632b819cb66eb14360d5e2c0c3d00301577783c2875f9d38e6757c->enter($__internal_770be31e60632b819cb66eb14360d5e2c0c3d00301577783c2875f9d38e6757c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bedba83c69b37ea74119141c068e52db6afd1abc0905e852f9f460fd2d9729e2->leave($__internal_bedba83c69b37ea74119141c068e52db6afd1abc0905e852f9f460fd2d9729e2_prof);

        
        $__internal_770be31e60632b819cb66eb14360d5e2c0c3d00301577783c2875f9d38e6757c->leave($__internal_770be31e60632b819cb66eb14360d5e2c0c3d00301577783c2875f9d38e6757c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4579cc73b7776837b53771c455874c4f9a8a73082ca2e11a9a419af52dfa567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4579cc73b7776837b53771c455874c4f9a8a73082ca2e11a9a419af52dfa567->enter($__internal_b4579cc73b7776837b53771c455874c4f9a8a73082ca2e11a9a419af52dfa567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1a9dd5172597b819901129e6ede320797300e2d6b41ed671628b106f7d02678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a9dd5172597b819901129e6ede320797300e2d6b41ed671628b106f7d02678->enter($__internal_f1a9dd5172597b819901129e6ede320797300e2d6b41ed671628b106f7d02678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_f1a9dd5172597b819901129e6ede320797300e2d6b41ed671628b106f7d02678->leave($__internal_f1a9dd5172597b819901129e6ede320797300e2d6b41ed671628b106f7d02678_prof);

        
        $__internal_b4579cc73b7776837b53771c455874c4f9a8a73082ca2e11a9a419af52dfa567->leave($__internal_b4579cc73b7776837b53771c455874c4f9a8a73082ca2e11a9a419af52dfa567_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_34dc5d7a139e2a0d915da1527dcc74980aeba18e3388f9cb725d5899e8ffdf20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34dc5d7a139e2a0d915da1527dcc74980aeba18e3388f9cb725d5899e8ffdf20->enter($__internal_34dc5d7a139e2a0d915da1527dcc74980aeba18e3388f9cb725d5899e8ffdf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_5d7f5f81e60dbbf0f5fadf3ae3190eff7f680736b11d81bc85aa30b7acbe466d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7f5f81e60dbbf0f5fadf3ae3190eff7f680736b11d81bc85aa30b7acbe466d->enter($__internal_5d7f5f81e60dbbf0f5fadf3ae3190eff7f680736b11d81bc85aa30b7acbe466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_5d7f5f81e60dbbf0f5fadf3ae3190eff7f680736b11d81bc85aa30b7acbe466d->leave($__internal_5d7f5f81e60dbbf0f5fadf3ae3190eff7f680736b11d81bc85aa30b7acbe466d_prof);

        
        $__internal_34dc5d7a139e2a0d915da1527dcc74980aeba18e3388f9cb725d5899e8ffdf20->leave($__internal_34dc5d7a139e2a0d915da1527dcc74980aeba18e3388f9cb725d5899e8ffdf20_prof);

    }

    // line 59
    public function block_active($context, array $blocks = array())
    {
        $__internal_b3940a279b7af9838b2e4509efd266b718cb933ea380b366f390d8128c154e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3940a279b7af9838b2e4509efd266b718cb933ea380b366f390d8128c154e27->enter($__internal_b3940a279b7af9838b2e4509efd266b718cb933ea380b366f390d8128c154e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_3c6cca8d7082af371b6871da3c50b8a5eb5f65aa04995d6a9ba05d209685fcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6cca8d7082af371b6871da3c50b8a5eb5f65aa04995d6a9ba05d209685fcd1->enter($__internal_3c6cca8d7082af371b6871da3c50b8a5eb5f65aa04995d6a9ba05d209685fcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 60
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.listCl').addClass('active');
    </script>
";
        
        $__internal_3c6cca8d7082af371b6871da3c50b8a5eb5f65aa04995d6a9ba05d209685fcd1->leave($__internal_3c6cca8d7082af371b6871da3c50b8a5eb5f65aa04995d6a9ba05d209685fcd1_prof);

        
        $__internal_b3940a279b7af9838b2e4509efd266b718cb933ea380b366f390d8128c154e27->leave($__internal_b3940a279b7af9838b2e4509efd266b718cb933ea380b366f390d8128c154e27_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/listClasses.html.twig";
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
{% endblock%}", "classesViews/listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\classesViews\\listClasses.html.twig");
    }
}
