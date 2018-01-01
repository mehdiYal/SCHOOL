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
        $__internal_2a7213fbacab7c2eefb1948d1e7efda9ff5d0960ce890195c3ad51299e47527a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7213fbacab7c2eefb1948d1e7efda9ff5d0960ce890195c3ad51299e47527a->enter($__internal_2a7213fbacab7c2eefb1948d1e7efda9ff5d0960ce890195c3ad51299e47527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_18f58f749d5a1c9692a621ce33fa15ac2f1d9323ceb4809c2b626120df70d000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f58f749d5a1c9692a621ce33fa15ac2f1d9323ceb4809c2b626120df70d000->enter($__internal_18f58f749d5a1c9692a621ce33fa15ac2f1d9323ceb4809c2b626120df70d000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2a7213fbacab7c2eefb1948d1e7efda9ff5d0960ce890195c3ad51299e47527a->leave($__internal_2a7213fbacab7c2eefb1948d1e7efda9ff5d0960ce890195c3ad51299e47527a_prof);

        
        $__internal_18f58f749d5a1c9692a621ce33fa15ac2f1d9323ceb4809c2b626120df70d000->leave($__internal_18f58f749d5a1c9692a621ce33fa15ac2f1d9323ceb4809c2b626120df70d000_prof);

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
