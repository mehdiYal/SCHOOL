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
        $__internal_6dc328c45b09b3aab9f64f97d8ebd4262ba637b6e8aba10b864b717ebc33ed7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc328c45b09b3aab9f64f97d8ebd4262ba637b6e8aba10b864b717ebc33ed7d->enter($__internal_6dc328c45b09b3aab9f64f97d8ebd4262ba637b6e8aba10b864b717ebc33ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $__internal_3852a469fa53f3c82e315f23ca5371d4768c8409806cdc4437485da91f1955c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3852a469fa53f3c82e315f23ca5371d4768c8409806cdc4437485da91f1955c6->enter($__internal_3852a469fa53f3c82e315f23ca5371d4768c8409806cdc4437485da91f1955c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc328c45b09b3aab9f64f97d8ebd4262ba637b6e8aba10b864b717ebc33ed7d->leave($__internal_6dc328c45b09b3aab9f64f97d8ebd4262ba637b6e8aba10b864b717ebc33ed7d_prof);

        
        $__internal_3852a469fa53f3c82e315f23ca5371d4768c8409806cdc4437485da91f1955c6->leave($__internal_3852a469fa53f3c82e315f23ca5371d4768c8409806cdc4437485da91f1955c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd6950bca1479106129368401a1a897b745793cc2e9df84b9262b1ace68c89aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6950bca1479106129368401a1a897b745793cc2e9df84b9262b1ace68c89aa->enter($__internal_bd6950bca1479106129368401a1a897b745793cc2e9df84b9262b1ace68c89aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a948754461a8ba1f57b8b7b5dad9a6e2ffab5c80996c120da47013b81613e4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a948754461a8ba1f57b8b7b5dad9a6e2ffab5c80996c120da47013b81613e4b6->enter($__internal_a948754461a8ba1f57b8b7b5dad9a6e2ffab5c80996c120da47013b81613e4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_a948754461a8ba1f57b8b7b5dad9a6e2ffab5c80996c120da47013b81613e4b6->leave($__internal_a948754461a8ba1f57b8b7b5dad9a6e2ffab5c80996c120da47013b81613e4b6_prof);

        
        $__internal_bd6950bca1479106129368401a1a897b745793cc2e9df84b9262b1ace68c89aa->leave($__internal_bd6950bca1479106129368401a1a897b745793cc2e9df84b9262b1ace68c89aa_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_ce3676f30afd72c7925ba7920e76d3043962f0d495df277012398ec05f31b753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3676f30afd72c7925ba7920e76d3043962f0d495df277012398ec05f31b753->enter($__internal_ce3676f30afd72c7925ba7920e76d3043962f0d495df277012398ec05f31b753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_8092f651d2038df2c6ca2a75d6a22994baa698e5aa40cf05e3d3e617e583ce1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8092f651d2038df2c6ca2a75d6a22994baa698e5aa40cf05e3d3e617e583ce1a->enter($__internal_8092f651d2038df2c6ca2a75d6a22994baa698e5aa40cf05e3d3e617e583ce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_8092f651d2038df2c6ca2a75d6a22994baa698e5aa40cf05e3d3e617e583ce1a->leave($__internal_8092f651d2038df2c6ca2a75d6a22994baa698e5aa40cf05e3d3e617e583ce1a_prof);

        
        $__internal_ce3676f30afd72c7925ba7920e76d3043962f0d495df277012398ec05f31b753->leave($__internal_ce3676f30afd72c7925ba7920e76d3043962f0d495df277012398ec05f31b753_prof);

    }

    public function block_active($context, array $blocks = array())
    {
        $__internal_191c4cad5743bea9810a2af241bc4b677731746db72fbf40f1deab6a437d093d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191c4cad5743bea9810a2af241bc4b677731746db72fbf40f1deab6a437d093d->enter($__internal_191c4cad5743bea9810a2af241bc4b677731746db72fbf40f1deab6a437d093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_2b27cb980de0c5cba16ad0068fb696e843aea4af7e0f69a50fed6bdb9df59dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b27cb980de0c5cba16ad0068fb696e843aea4af7e0f69a50fed6bdb9df59dbd->enter($__internal_2b27cb980de0c5cba16ad0068fb696e843aea4af7e0f69a50fed6bdb9df59dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 54
        echo "    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    ";
        
        $__internal_2b27cb980de0c5cba16ad0068fb696e843aea4af7e0f69a50fed6bdb9df59dbd->leave($__internal_2b27cb980de0c5cba16ad0068fb696e843aea4af7e0f69a50fed6bdb9df59dbd_prof);

        
        $__internal_191c4cad5743bea9810a2af241bc4b677731746db72fbf40f1deab6a437d093d->leave($__internal_191c4cad5743bea9810a2af241bc4b677731746db72fbf40f1deab6a437d093d_prof);

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
