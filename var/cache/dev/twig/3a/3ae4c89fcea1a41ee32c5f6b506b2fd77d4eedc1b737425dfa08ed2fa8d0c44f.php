<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_e72bb70626ed1799117e7054958563ee84670c79f53bd2a0a506af1cdad527d4 extends Twig_Template
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
        $__internal_9e874ed15ad8edd3c1232e3ef14d6b3167fedfd5e1ee53457e605e15b55ebf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e874ed15ad8edd3c1232e3ef14d6b3167fedfd5e1ee53457e605e15b55ebf24->enter($__internal_9e874ed15ad8edd3c1232e3ef14d6b3167fedfd5e1ee53457e605e15b55ebf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_dfe577a653a2f7787c6d49fe0c0a935f068fad28df7afce636f42b43bd1c8d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe577a653a2f7787c6d49fe0c0a935f068fad28df7afce636f42b43bd1c8d60->enter($__internal_dfe577a653a2f7787c6d49fe0c0a935f068fad28df7afce636f42b43bd1c8d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_9e874ed15ad8edd3c1232e3ef14d6b3167fedfd5e1ee53457e605e15b55ebf24->leave($__internal_9e874ed15ad8edd3c1232e3ef14d6b3167fedfd5e1ee53457e605e15b55ebf24_prof);

        
        $__internal_dfe577a653a2f7787c6d49fe0c0a935f068fad28df7afce636f42b43bd1c8d60->leave($__internal_dfe577a653a2f7787c6d49fe0c0a935f068fad28df7afce636f42b43bd1c8d60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
