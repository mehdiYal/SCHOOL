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
        $__internal_2549f3c2116ad96300f7c1b80dfd54628f98783bbda8042479acbe132207fc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2549f3c2116ad96300f7c1b80dfd54628f98783bbda8042479acbe132207fc1c->enter($__internal_2549f3c2116ad96300f7c1b80dfd54628f98783bbda8042479acbe132207fc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_3fc4bb72a8f70f665d83c0eee75f561cf5ffb580a0ff5fa5ee13cfec628b154a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc4bb72a8f70f665d83c0eee75f561cf5ffb580a0ff5fa5ee13cfec628b154a->enter($__internal_3fc4bb72a8f70f665d83c0eee75f561cf5ffb580a0ff5fa5ee13cfec628b154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2549f3c2116ad96300f7c1b80dfd54628f98783bbda8042479acbe132207fc1c->leave($__internal_2549f3c2116ad96300f7c1b80dfd54628f98783bbda8042479acbe132207fc1c_prof);

        
        $__internal_3fc4bb72a8f70f665d83c0eee75f561cf5ffb580a0ff5fa5ee13cfec628b154a->leave($__internal_3fc4bb72a8f70f665d83c0eee75f561cf5ffb580a0ff5fa5ee13cfec628b154a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc1df0b8e185cc0e65b5d24dd80c11d436a3c87a87976a233effda8878c146ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1df0b8e185cc0e65b5d24dd80c11d436a3c87a87976a233effda8878c146ee->enter($__internal_fc1df0b8e185cc0e65b5d24dd80c11d436a3c87a87976a233effda8878c146ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bcd255071540c47651155bf9a77f1c4e83795ae886f1666d2b039687e829343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcd255071540c47651155bf9a77f1c4e83795ae886f1666d2b039687e829343->enter($__internal_1bcd255071540c47651155bf9a77f1c4e83795ae886f1666d2b039687e829343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_1bcd255071540c47651155bf9a77f1c4e83795ae886f1666d2b039687e829343->leave($__internal_1bcd255071540c47651155bf9a77f1c4e83795ae886f1666d2b039687e829343_prof);

        
        $__internal_fc1df0b8e185cc0e65b5d24dd80c11d436a3c87a87976a233effda8878c146ee->leave($__internal_fc1df0b8e185cc0e65b5d24dd80c11d436a3c87a87976a233effda8878c146ee_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_efa43eab427ddf7e697275ffabfe755ac6463190f5bf1da8bc7bc79e5b2416d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa43eab427ddf7e697275ffabfe755ac6463190f5bf1da8bc7bc79e5b2416d4->enter($__internal_efa43eab427ddf7e697275ffabfe755ac6463190f5bf1da8bc7bc79e5b2416d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_26cdac9284087d1c76c773c0c13914e75b12236f581b3de2a300e4b97693b60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cdac9284087d1c76c773c0c13914e75b12236f581b3de2a300e4b97693b60f->enter($__internal_26cdac9284087d1c76c773c0c13914e75b12236f581b3de2a300e4b97693b60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_26cdac9284087d1c76c773c0c13914e75b12236f581b3de2a300e4b97693b60f->leave($__internal_26cdac9284087d1c76c773c0c13914e75b12236f581b3de2a300e4b97693b60f_prof);

        
        $__internal_efa43eab427ddf7e697275ffabfe755ac6463190f5bf1da8bc7bc79e5b2416d4->leave($__internal_efa43eab427ddf7e697275ffabfe755ac6463190f5bf1da8bc7bc79e5b2416d4_prof);

    }

    // line 43
    public function block_active($context, array $blocks = array())
    {
        $__internal_bb7ae45be3780b9ffe3fea35a71b9eb72fa1637fc97b9cb5472af9b7886eb77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7ae45be3780b9ffe3fea35a71b9eb72fa1637fc97b9cb5472af9b7886eb77c->enter($__internal_bb7ae45be3780b9ffe3fea35a71b9eb72fa1637fc97b9cb5472af9b7886eb77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_97889977d13aacbc02e5dd35b272d9c7364b75404bc9003f936c11a31f8ceb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97889977d13aacbc02e5dd35b272d9c7364b75404bc9003f936c11a31f8ceb03->enter($__internal_97889977d13aacbc02e5dd35b272d9c7364b75404bc9003f936c11a31f8ceb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 44
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.salle').addClass('active');
        \$('.listSalle').addClass('active');
    </script>
";
        
        $__internal_97889977d13aacbc02e5dd35b272d9c7364b75404bc9003f936c11a31f8ceb03->leave($__internal_97889977d13aacbc02e5dd35b272d9c7364b75404bc9003f936c11a31f8ceb03_prof);

        
        $__internal_bb7ae45be3780b9ffe3fea35a71b9eb72fa1637fc97b9cb5472af9b7886eb77c->leave($__internal_bb7ae45be3780b9ffe3fea35a71b9eb72fa1637fc97b9cb5472af9b7886eb77c_prof);

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
