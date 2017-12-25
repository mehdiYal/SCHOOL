<?php

/* elevesViews/listEleves.html.twig */
class __TwigTemplate_efdce8600ad3899a76a81df38a48d9d17bb9a453cb7fb3b0467aeebab474dbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "elevesViews/listEleves.html.twig", 1);
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
        $__internal_96cb20c70c4150cda1dd56a919e65de124a98eb681187764680415abac6715d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cb20c70c4150cda1dd56a919e65de124a98eb681187764680415abac6715d0->enter($__internal_96cb20c70c4150cda1dd56a919e65de124a98eb681187764680415abac6715d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_846710ce679bb9f34a657a2821ae30395681ea1d0d64bb611dfd02f343e5a32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846710ce679bb9f34a657a2821ae30395681ea1d0d64bb611dfd02f343e5a32f->enter($__internal_846710ce679bb9f34a657a2821ae30395681ea1d0d64bb611dfd02f343e5a32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96cb20c70c4150cda1dd56a919e65de124a98eb681187764680415abac6715d0->leave($__internal_96cb20c70c4150cda1dd56a919e65de124a98eb681187764680415abac6715d0_prof);

        
        $__internal_846710ce679bb9f34a657a2821ae30395681ea1d0d64bb611dfd02f343e5a32f->leave($__internal_846710ce679bb9f34a657a2821ae30395681ea1d0d64bb611dfd02f343e5a32f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bff626795fb5a7a2bfd12f88fed29482d00ee8a0b34538a7781fccedbec287c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff626795fb5a7a2bfd12f88fed29482d00ee8a0b34538a7781fccedbec287c9->enter($__internal_bff626795fb5a7a2bfd12f88fed29482d00ee8a0b34538a7781fccedbec287c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ad0bff68c541175f2a6de73832f7e436e850d29cfb3935ac9ceca46b05fe4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad0bff68c541175f2a6de73832f7e436e850d29cfb3935ac9ceca46b05fe4fb->enter($__internal_7ad0bff68c541175f2a6de73832f7e436e850d29cfb3935ac9ceca46b05fe4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_7ad0bff68c541175f2a6de73832f7e436e850d29cfb3935ac9ceca46b05fe4fb->leave($__internal_7ad0bff68c541175f2a6de73832f7e436e850d29cfb3935ac9ceca46b05fe4fb_prof);

        
        $__internal_bff626795fb5a7a2bfd12f88fed29482d00ee8a0b34538a7781fccedbec287c9->leave($__internal_bff626795fb5a7a2bfd12f88fed29482d00ee8a0b34538a7781fccedbec287c9_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_4982ac273f9dcdbb8fc9b46beee792428dc7f2a96e621c019c747b1289dcfe3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4982ac273f9dcdbb8fc9b46beee792428dc7f2a96e621c019c747b1289dcfe3a->enter($__internal_4982ac273f9dcdbb8fc9b46beee792428dc7f2a96e621c019c747b1289dcfe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_a9cd8376ed630425fa3e48dd30088d9a382a4858dda1c30564a9c37f9604d547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cd8376ed630425fa3e48dd30088d9a382a4858dda1c30564a9c37f9604d547->enter($__internal_a9cd8376ed630425fa3e48dd30088d9a382a4858dda1c30564a9c37f9604d547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
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
        
        $__internal_a9cd8376ed630425fa3e48dd30088d9a382a4858dda1c30564a9c37f9604d547->leave($__internal_a9cd8376ed630425fa3e48dd30088d9a382a4858dda1c30564a9c37f9604d547_prof);

        
        $__internal_4982ac273f9dcdbb8fc9b46beee792428dc7f2a96e621c019c747b1289dcfe3a->leave($__internal_4982ac273f9dcdbb8fc9b46beee792428dc7f2a96e621c019c747b1289dcfe3a_prof);

    }

    public function block_active($context, array $blocks = array())
    {
        $__internal_41ec0cd10093f48eaf1571f8b9bd443690381ac07d4f6d4784bb1575957aa443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ec0cd10093f48eaf1571f8b9bd443690381ac07d4f6d4784bb1575957aa443->enter($__internal_41ec0cd10093f48eaf1571f8b9bd443690381ac07d4f6d4784bb1575957aa443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_cfc0dc15e8f740c5b67501d40fa3bc04d201c97b18d116dad217e7fa9bcd279c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc0dc15e8f740c5b67501d40fa3bc04d201c97b18d116dad217e7fa9bcd279c->enter($__internal_cfc0dc15e8f740c5b67501d40fa3bc04d201c97b18d116dad217e7fa9bcd279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 54
        echo "    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    ";
        
        $__internal_cfc0dc15e8f740c5b67501d40fa3bc04d201c97b18d116dad217e7fa9bcd279c->leave($__internal_cfc0dc15e8f740c5b67501d40fa3bc04d201c97b18d116dad217e7fa9bcd279c_prof);

        
        $__internal_41ec0cd10093f48eaf1571f8b9bd443690381ac07d4f6d4784bb1575957aa443->leave($__internal_41ec0cd10093f48eaf1571f8b9bd443690381ac07d4f6d4784bb1575957aa443_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/listEleves.html.twig";
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
", "elevesViews/listEleves.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/elevesViews/listEleves.html.twig");
    }
}
