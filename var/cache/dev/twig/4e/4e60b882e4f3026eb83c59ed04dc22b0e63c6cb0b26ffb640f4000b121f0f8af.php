<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_02703b22b63142206b77328961e656060820a190a4fd10e3b6a2832987c7f80c extends Twig_Template
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
        $__internal_388445f98517fa82928a2eb8cf94df8fb168f761a9a711963e708d28c5883955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388445f98517fa82928a2eb8cf94df8fb168f761a9a711963e708d28c5883955->enter($__internal_388445f98517fa82928a2eb8cf94df8fb168f761a9a711963e708d28c5883955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_60e81b19f9205f468cb7693a69701f23e96261d0ce4d36a9c9e878a2d42ff478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e81b19f9205f468cb7693a69701f23e96261d0ce4d36a9c9e878a2d42ff478->enter($__internal_60e81b19f9205f468cb7693a69701f23e96261d0ce4d36a9c9e878a2d42ff478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_388445f98517fa82928a2eb8cf94df8fb168f761a9a711963e708d28c5883955->leave($__internal_388445f98517fa82928a2eb8cf94df8fb168f761a9a711963e708d28c5883955_prof);

        
        $__internal_60e81b19f9205f468cb7693a69701f23e96261d0ce4d36a9c9e878a2d42ff478->leave($__internal_60e81b19f9205f468cb7693a69701f23e96261d0ce4d36a9c9e878a2d42ff478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
