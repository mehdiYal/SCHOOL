<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2da1501c0f2b2c086f90427005f19536bbee796fb0cc2f6f4dd1e63db3c3954 extends Twig_Template
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
        $__internal_5bfbdd6f9a0492a91a7d8f12394de35bf7967d2ebd12b810c70c87ae9e6dfbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfbdd6f9a0492a91a7d8f12394de35bf7967d2ebd12b810c70c87ae9e6dfbc8->enter($__internal_5bfbdd6f9a0492a91a7d8f12394de35bf7967d2ebd12b810c70c87ae9e6dfbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c5c9c4466e0d9ec9e6895f8bafa2ed750692f479550761d2ea60506c93e89446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c9c4466e0d9ec9e6895f8bafa2ed750692f479550761d2ea60506c93e89446->enter($__internal_c5c9c4466e0d9ec9e6895f8bafa2ed750692f479550761d2ea60506c93e89446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5bfbdd6f9a0492a91a7d8f12394de35bf7967d2ebd12b810c70c87ae9e6dfbc8->leave($__internal_5bfbdd6f9a0492a91a7d8f12394de35bf7967d2ebd12b810c70c87ae9e6dfbc8_prof);

        
        $__internal_c5c9c4466e0d9ec9e6895f8bafa2ed750692f479550761d2ea60506c93e89446->leave($__internal_c5c9c4466e0d9ec9e6895f8bafa2ed750692f479550761d2ea60506c93e89446_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
