<?php

/* :programme:show.html.twig */
class __TwigTemplate_773e35aa4fee86c56f6120e59cece0c4ecb500df31d310798dd965840a8e5a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":programme:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46c2acfa93cb4577fb01a0550402e03987537dafaada1f16dcc0ccc86aaf22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46c2acfa93cb4577fb01a0550402e03987537dafaada1f16dcc0ccc86aaf22f->enter($__internal_f46c2acfa93cb4577fb01a0550402e03987537dafaada1f16dcc0ccc86aaf22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programme:show.html.twig"));

        $__internal_a078a4563b7b5b3f2fa3df774d1dc0a40ee257655ac8dc97eee31e43bf8c9999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a078a4563b7b5b3f2fa3df774d1dc0a40ee257655ac8dc97eee31e43bf8c9999->enter($__internal_a078a4563b7b5b3f2fa3df774d1dc0a40ee257655ac8dc97eee31e43bf8c9999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programme:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46c2acfa93cb4577fb01a0550402e03987537dafaada1f16dcc0ccc86aaf22f->leave($__internal_f46c2acfa93cb4577fb01a0550402e03987537dafaada1f16dcc0ccc86aaf22f_prof);

        
        $__internal_a078a4563b7b5b3f2fa3df774d1dc0a40ee257655ac8dc97eee31e43bf8c9999->leave($__internal_a078a4563b7b5b3f2fa3df774d1dc0a40ee257655ac8dc97eee31e43bf8c9999_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_36147336522781104ac1f4d809b340b286f41a34a4d02c33ff40512828e857ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36147336522781104ac1f4d809b340b286f41a34a4d02c33ff40512828e857ea->enter($__internal_36147336522781104ac1f4d809b340b286f41a34a4d02c33ff40512828e857ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39ca6aac20810924e5fc95e6ce3e934fbb1082f2cae9350ccc66d9ba101fd03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ca6aac20810924e5fc95e6ce3e934fbb1082f2cae9350ccc66d9ba101fd03b->enter($__internal_39ca6aac20810924e5fc95e6ce3e934fbb1082f2cae9350ccc66d9ba101fd03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 6
        echo "\t<table>
\t\t
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "jour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 9
            echo "\t\t<th>
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "nom", array()), "html", null, true);
            echo "
\t\t</th>
\t\t
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "horraire", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["horraire"]) {
                // line 14
                echo "\t\t<tr>\t
\t\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($context["horraire"], "heureDeb", array()), "H") . "H - ") . twig_date_format_filter($this->env, $this->getAttribute($context["horraire"], "heureFin", array()), "H")) . "H"), "html", null, true);
                echo "</td>
\t\t\t\t";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "programme", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
                    // line 17
                    echo "\t\t\t\t\t";
                    if ((($this->getAttribute($this->getAttribute($context["programme"], "jour", array()), "id", array()) == $this->getAttribute($context["jour"], "id", array())) && ($this->getAttribute($this->getAttribute($context["programme"], "horraire", array()), "id", array()) == $this->getAttribute($context["horraire"], "id", array())))) {
                        // line 18
                        echo "\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["programme"], "matiere", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "enseignant", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "salle", array()), "nom", array())), "html", null, true);
                        echo "</td>
\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t\t
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horraire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t
\t</table>

";
        
        $__internal_39ca6aac20810924e5fc95e6ce3e934fbb1082f2cae9350ccc66d9ba101fd03b->leave($__internal_39ca6aac20810924e5fc95e6ce3e934fbb1082f2cae9350ccc66d9ba101fd03b_prof);

        
        $__internal_36147336522781104ac1f4d809b340b286f41a34a4d02c33ff40512828e857ea->leave($__internal_36147336522781104ac1f4d809b340b286f41a34a4d02c33ff40512828e857ea_prof);

    }

    public function getTemplateName()
    {
        return ":programme:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  108 => 24,  100 => 21,  94 => 20,  88 => 18,  85 => 17,  81 => 16,  77 => 15,  74 => 14,  70 => 13,  64 => 10,  61 => 9,  57 => 8,  53 => 6,  50 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
{%dump(data)%}
\t<table>
\t\t
\t{% for jour in data.jour %}
\t\t<th>
\t\t\t{{jour.nom}}
\t\t</th>
\t\t
\t\t{% for horraire in data.horraire %}
\t\t<tr>\t
\t\t\t\t<td>{{horraire.heureDeb|date('H')~'H - '~horraire.heureFin|date('H')~'H'}}</td>
\t\t\t\t{% for programme in data.programme %}
\t\t\t\t\t{% if programme.jour.id==jour.id and programme.horraire.id==horraire.id %}
\t\t\t\t\t<td>{{programme.matiere.nom~' '~programme.enseignant.nom~' '~programme.salle.nom}}</td>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t
\t\t</tr>
\t\t{% endfor %}
\t{% endfor %}

\t
\t</table>

{% endblock %}", ":programme:show.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/programme/show.html.twig");
    }
}
