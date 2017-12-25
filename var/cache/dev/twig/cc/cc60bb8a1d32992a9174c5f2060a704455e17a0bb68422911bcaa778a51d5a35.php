<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_87d82ad9bcacc7400e6b7d3e246a39769ee71733f00895a96d95e79a441c2df0 extends Twig_Template
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
        $__internal_278410efa68e03a4c98f74b3b9b87f76e54f08e02153c1a2b3162dbbfbf15d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278410efa68e03a4c98f74b3b9b87f76e54f08e02153c1a2b3162dbbfbf15d4d->enter($__internal_278410efa68e03a4c98f74b3b9b87f76e54f08e02153c1a2b3162dbbfbf15d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4dfd2ad4bf541ad4cd254469aab4d1c46e5cca12d4b7452b28c3fc01432aebaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfd2ad4bf541ad4cd254469aab4d1c46e5cca12d4b7452b28c3fc01432aebaf->enter($__internal_4dfd2ad4bf541ad4cd254469aab4d1c46e5cca12d4b7452b28c3fc01432aebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_278410efa68e03a4c98f74b3b9b87f76e54f08e02153c1a2b3162dbbfbf15d4d->leave($__internal_278410efa68e03a4c98f74b3b9b87f76e54f08e02153c1a2b3162dbbfbf15d4d_prof);

        
        $__internal_4dfd2ad4bf541ad4cd254469aab4d1c46e5cca12d4b7452b28c3fc01432aebaf->leave($__internal_4dfd2ad4bf541ad4cd254469aab4d1c46e5cca12d4b7452b28c3fc01432aebaf_prof);

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
