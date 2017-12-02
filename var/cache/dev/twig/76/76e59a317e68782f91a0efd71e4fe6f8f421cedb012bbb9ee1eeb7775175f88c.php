<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_db79d535ae67c9891d842b77e84c3b336b9a4480ebaade04be7698098be4910e extends Twig_Template
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
        $__internal_1ec463d30c0ff23f6e9f0c47e2e41fa6f918c9dc21b6da9fdcf4db0ab16fe892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec463d30c0ff23f6e9f0c47e2e41fa6f918c9dc21b6da9fdcf4db0ab16fe892->enter($__internal_1ec463d30c0ff23f6e9f0c47e2e41fa6f918c9dc21b6da9fdcf4db0ab16fe892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_55ed658ef4afe650db6205e7fef45aa2e78f23d20569f02921c7d57ee85c7aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ed658ef4afe650db6205e7fef45aa2e78f23d20569f02921c7d57ee85c7aa7->enter($__internal_55ed658ef4afe650db6205e7fef45aa2e78f23d20569f02921c7d57ee85c7aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1ec463d30c0ff23f6e9f0c47e2e41fa6f918c9dc21b6da9fdcf4db0ab16fe892->leave($__internal_1ec463d30c0ff23f6e9f0c47e2e41fa6f918c9dc21b6da9fdcf4db0ab16fe892_prof);

        
        $__internal_55ed658ef4afe650db6205e7fef45aa2e78f23d20569f02921c7d57ee85c7aa7->leave($__internal_55ed658ef4afe650db6205e7fef45aa2e78f23d20569f02921c7d57ee85c7aa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
