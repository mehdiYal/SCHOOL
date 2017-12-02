<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_34a58bee08a046e3a826ce61d1b55da9d8c9511110a4988845b5d8a8ba19a7cf extends Twig_Template
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
        $__internal_b0820cb5a5b74473f84eb6c107be18be9f4c5a048c62afd1818e7edc2277cc8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0820cb5a5b74473f84eb6c107be18be9f4c5a048c62afd1818e7edc2277cc8c->enter($__internal_b0820cb5a5b74473f84eb6c107be18be9f4c5a048c62afd1818e7edc2277cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_2ac8347f941e674d6e9a2945e41e7c88a7dbcb819430532a36a60f7aaee47dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac8347f941e674d6e9a2945e41e7c88a7dbcb819430532a36a60f7aaee47dfc->enter($__internal_2ac8347f941e674d6e9a2945e41e7c88a7dbcb819430532a36a60f7aaee47dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b0820cb5a5b74473f84eb6c107be18be9f4c5a048c62afd1818e7edc2277cc8c->leave($__internal_b0820cb5a5b74473f84eb6c107be18be9f4c5a048c62afd1818e7edc2277cc8c_prof);

        
        $__internal_2ac8347f941e674d6e9a2945e41e7c88a7dbcb819430532a36a60f7aaee47dfc->leave($__internal_2ac8347f941e674d6e9a2945e41e7c88a7dbcb819430532a36a60f7aaee47dfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
