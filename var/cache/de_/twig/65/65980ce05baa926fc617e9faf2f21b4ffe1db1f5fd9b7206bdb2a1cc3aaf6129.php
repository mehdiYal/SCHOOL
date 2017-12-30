<?php

/* parentsViews/listParents.html.twig */
class __TwigTemplate_a2c293aa9bf361a3d0f18dd119e450b4cae11d051ded145dd312b0c80e0d41ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "parentsViews/listParents.html.twig", 1);
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
        $__internal_5ff65007de43a0f854e050294a068baf2cb9013fc31a32a58a003a51a1485392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff65007de43a0f854e050294a068baf2cb9013fc31a32a58a003a51a1485392->enter($__internal_5ff65007de43a0f854e050294a068baf2cb9013fc31a32a58a003a51a1485392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $__internal_1f251ceb9b91daba596918b7266b250254a8eb4dc3ea17aea85e9eb3c33acd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f251ceb9b91daba596918b7266b250254a8eb4dc3ea17aea85e9eb3c33acd2e->enter($__internal_1f251ceb9b91daba596918b7266b250254a8eb4dc3ea17aea85e9eb3c33acd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff65007de43a0f854e050294a068baf2cb9013fc31a32a58a003a51a1485392->leave($__internal_5ff65007de43a0f854e050294a068baf2cb9013fc31a32a58a003a51a1485392_prof);

        
        $__internal_1f251ceb9b91daba596918b7266b250254a8eb4dc3ea17aea85e9eb3c33acd2e->leave($__internal_1f251ceb9b91daba596918b7266b250254a8eb4dc3ea17aea85e9eb3c33acd2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_037c5fe25b9ee665d494ca730e27412c1a02cc15cefdcddb9919d30e81d8c615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037c5fe25b9ee665d494ca730e27412c1a02cc15cefdcddb9919d30e81d8c615->enter($__internal_037c5fe25b9ee665d494ca730e27412c1a02cc15cefdcddb9919d30e81d8c615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_065ce7c6e4b7f263efff134060738980dbbd5339c68dd89b527f07dc8e2d71b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065ce7c6e4b7f263efff134060738980dbbd5339c68dd89b527f07dc8e2d71b9->enter($__internal_065ce7c6e4b7f263efff134060738980dbbd5339c68dd89b527f07dc8e2d71b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_065ce7c6e4b7f263efff134060738980dbbd5339c68dd89b527f07dc8e2d71b9->leave($__internal_065ce7c6e4b7f263efff134060738980dbbd5339c68dd89b527f07dc8e2d71b9_prof);

        
        $__internal_037c5fe25b9ee665d494ca730e27412c1a02cc15cefdcddb9919d30e81d8c615->leave($__internal_037c5fe25b9ee665d494ca730e27412c1a02cc15cefdcddb9919d30e81d8c615_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_86481b44455613baec41946188e9ffedbdb190aec39a7df2cce137915d5c757d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86481b44455613baec41946188e9ffedbdb190aec39a7df2cce137915d5c757d->enter($__internal_86481b44455613baec41946188e9ffedbdb190aec39a7df2cce137915d5c757d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_546297d693cbede9bb2e685a3117ad6edb14d9c2926cd642a8ca43828a6a0e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546297d693cbede9bb2e685a3117ad6edb14d9c2926cd642a8ca43828a6a0e82->enter($__internal_546297d693cbede9bb2e685a3117ad6edb14d9c2926cd642a8ca43828a6a0e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
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
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["parent"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], "eleves", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["e"], "nom", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
                echo "</a></li>\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_546297d693cbede9bb2e685a3117ad6edb14d9c2926cd642a8ca43828a6a0e82->leave($__internal_546297d693cbede9bb2e685a3117ad6edb14d9c2926cd642a8ca43828a6a0e82_prof);

        
        $__internal_86481b44455613baec41946188e9ffedbdb190aec39a7df2cce137915d5c757d->leave($__internal_86481b44455613baec41946188e9ffedbdb190aec39a7df2cce137915d5c757d_prof);

    }

    // line 54
    public function block_active($context, array $blocks = array())
    {
        $__internal_605937d20e568761fb4f025882cce63c660f145f224d017bf07c224df7353f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605937d20e568761fb4f025882cce63c660f145f224d017bf07c224df7353f81->enter($__internal_605937d20e568761fb4f025882cce63c660f145f224d017bf07c224df7353f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_cb27ba90607fbe1f794429df6ccfcd323fa396283cdbda7633c7d656fcf264f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb27ba90607fbe1f794429df6ccfcd323fa396283cdbda7633c7d656fcf264f7->enter($__internal_cb27ba90607fbe1f794429df6ccfcd323fa396283cdbda7633c7d656fcf264f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 55
        echo "\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
";
        
        $__internal_cb27ba90607fbe1f794429df6ccfcd323fa396283cdbda7633c7d656fcf264f7->leave($__internal_cb27ba90607fbe1f794429df6ccfcd323fa396283cdbda7633c7d656fcf264f7_prof);

        
        $__internal_605937d20e568761fb4f025882cce63c660f145f224d017bf07c224df7353f81->leave($__internal_605937d20e568761fb4f025882cce63c660f145f224d017bf07c224df7353f81_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/listParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 55,  178 => 54,  165 => 49,  153 => 43,  145 => 38,  137 => 33,  132 => 30,  119 => 28,  115 => 27,  107 => 24,  104 => 23,  100 => 22,  93 => 18,  89 => 17,  85 => 16,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'parents'|trans}}
{% endblock %}

{% block bodyList %}

\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for parent in app.user.ecole.parents %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ parent.nom|upper}} {{ parent.prenom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t{% for e in parent.eleves %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('profileEleve',{'id':e.id})}}\">{{ e.nom|upper}} {{ e.prenom}}</a></li>\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %} 

{% block active %}
\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
{% endblock%}", "parentsViews/listParents.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\parentsViews\\listParents.html.twig");
    }
}
