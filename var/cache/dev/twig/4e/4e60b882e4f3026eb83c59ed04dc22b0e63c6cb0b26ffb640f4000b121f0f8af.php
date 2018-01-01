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
        $__internal_b6638ee5b43f69a7101ac24d06a0b7edc620e0c53eaceb26ad3fdb6a794bcf74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6638ee5b43f69a7101ac24d06a0b7edc620e0c53eaceb26ad3fdb6a794bcf74->enter($__internal_b6638ee5b43f69a7101ac24d06a0b7edc620e0c53eaceb26ad3fdb6a794bcf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4c3a96d96fa1eb3ac69842c83673256774f3eb0235d752fc7a440e02d70acfa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3a96d96fa1eb3ac69842c83673256774f3eb0235d752fc7a440e02d70acfa1->enter($__internal_4c3a96d96fa1eb3ac69842c83673256774f3eb0235d752fc7a440e02d70acfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b6638ee5b43f69a7101ac24d06a0b7edc620e0c53eaceb26ad3fdb6a794bcf74->leave($__internal_b6638ee5b43f69a7101ac24d06a0b7edc620e0c53eaceb26ad3fdb6a794bcf74_prof);

        
        $__internal_4c3a96d96fa1eb3ac69842c83673256774f3eb0235d752fc7a440e02d70acfa1->leave($__internal_4c3a96d96fa1eb3ac69842c83673256774f3eb0235d752fc7a440e02d70acfa1_prof);

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
