<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_00f355e03a0bc90db8c4e28f76147a25787a5d6d21be115b27b8ca0f21425537 extends Twig_Template
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
        $__internal_1d62ba07bca7b21b2787fd18a4675390417becd0c5b74bcad0996f9290e52e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d62ba07bca7b21b2787fd18a4675390417becd0c5b74bcad0996f9290e52e47->enter($__internal_1d62ba07bca7b21b2787fd18a4675390417becd0c5b74bcad0996f9290e52e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2516a47b708516c8301f9804ef424fbcc8879ed41d9a932d7ff0677025097d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2516a47b708516c8301f9804ef424fbcc8879ed41d9a932d7ff0677025097d18->enter($__internal_2516a47b708516c8301f9804ef424fbcc8879ed41d9a932d7ff0677025097d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1d62ba07bca7b21b2787fd18a4675390417becd0c5b74bcad0996f9290e52e47->leave($__internal_1d62ba07bca7b21b2787fd18a4675390417becd0c5b74bcad0996f9290e52e47_prof);

        
        $__internal_2516a47b708516c8301f9804ef424fbcc8879ed41d9a932d7ff0677025097d18->leave($__internal_2516a47b708516c8301f9804ef424fbcc8879ed41d9a932d7ff0677025097d18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
