<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8247d1b3d5c2c88761777f62cc169dc575bfe4b6046d776a781e182d70d6e029 extends Twig_Template
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
        $__internal_86140c8589650dea4bca81181b547ac935e9d4a4aaccd1e75aeba58c7104c0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86140c8589650dea4bca81181b547ac935e9d4a4aaccd1e75aeba58c7104c0e4->enter($__internal_86140c8589650dea4bca81181b547ac935e9d4a4aaccd1e75aeba58c7104c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_026d640a4799d63619cdcfa923c25fa6a63fc0cf161415b08132a2293e201669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026d640a4799d63619cdcfa923c25fa6a63fc0cf161415b08132a2293e201669->enter($__internal_026d640a4799d63619cdcfa923c25fa6a63fc0cf161415b08132a2293e201669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_86140c8589650dea4bca81181b547ac935e9d4a4aaccd1e75aeba58c7104c0e4->leave($__internal_86140c8589650dea4bca81181b547ac935e9d4a4aaccd1e75aeba58c7104c0e4_prof);

        
        $__internal_026d640a4799d63619cdcfa923c25fa6a63fc0cf161415b08132a2293e201669->leave($__internal_026d640a4799d63619cdcfa923c25fa6a63fc0cf161415b08132a2293e201669_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
