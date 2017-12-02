<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_8783997a86fde7b64066800918c2ddc3960d69de4726d7cd560830e993cb0fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1f7567248478af22bc7e19c7b2c1933258acbbb4e9232c1dad6405012efe1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f7567248478af22bc7e19c7b2c1933258acbbb4e9232c1dad6405012efe1e7->enter($__internal_d1f7567248478af22bc7e19c7b2c1933258acbbb4e9232c1dad6405012efe1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        $__internal_fefcc75ad4dc4555bddf3ee8a0cea84916faa2d234fcffd9477b7831cd848812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefcc75ad4dc4555bddf3ee8a0cea84916faa2d234fcffd9477b7831cd848812->enter($__internal_fefcc75ad4dc4555bddf3ee8a0cea84916faa2d234fcffd9477b7831cd848812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()))), array((" at line " . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? (")") : (""));
        }
        
        $__internal_d1f7567248478af22bc7e19c7b2c1933258acbbb4e9232c1dad6405012efe1e7->leave($__internal_d1f7567248478af22bc7e19c7b2c1933258acbbb4e9232c1dad6405012efe1e7_prof);

        
        $__internal_fefcc75ad4dc4555bddf3ee8a0cea84916faa2d234fcffd9477b7831cd848812->leave($__internal_fefcc75ad4dc4555bddf3ee8a0cea84916faa2d234fcffd9477b7831cd848812_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "TwigBundle:Exception:trace.txt.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
