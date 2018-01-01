<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e2691f65174746bdd40d2f0bf74d55cb6c5d1294ec18f15ee4b9ce01660e2c5d extends Twig_Template
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
        $__internal_667e5dbbbf639429c4e784f51ea233bf20ab4805c8e203909cc0156697bca0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667e5dbbbf639429c4e784f51ea233bf20ab4805c8e203909cc0156697bca0be->enter($__internal_667e5dbbbf639429c4e784f51ea233bf20ab4805c8e203909cc0156697bca0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_feb8c2ae321d908ff8e4561a12c334f1afb08c9328e9590e9db8e6b41f7edc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb8c2ae321d908ff8e4561a12c334f1afb08c9328e9590e9db8e6b41f7edc7b->enter($__internal_feb8c2ae321d908ff8e4561a12c334f1afb08c9328e9590e9db8e6b41f7edc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_667e5dbbbf639429c4e784f51ea233bf20ab4805c8e203909cc0156697bca0be->leave($__internal_667e5dbbbf639429c4e784f51ea233bf20ab4805c8e203909cc0156697bca0be_prof);

        
        $__internal_feb8c2ae321d908ff8e4561a12c334f1afb08c9328e9590e9db8e6b41f7edc7b->leave($__internal_feb8c2ae321d908ff8e4561a12c334f1afb08c9328e9590e9db8e6b41f7edc7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
