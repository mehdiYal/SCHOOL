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
        $__internal_e36b0dd5dd5e3cee7f5369f096e5c516b823da9d963e6b17af9378f245a8a3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36b0dd5dd5e3cee7f5369f096e5c516b823da9d963e6b17af9378f245a8a3bd->enter($__internal_e36b0dd5dd5e3cee7f5369f096e5c516b823da9d963e6b17af9378f245a8a3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3c404f2a01588eda1c305719c2f15e1aa0911cf606f5382fb3209041557c11c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c404f2a01588eda1c305719c2f15e1aa0911cf606f5382fb3209041557c11c3->enter($__internal_3c404f2a01588eda1c305719c2f15e1aa0911cf606f5382fb3209041557c11c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e36b0dd5dd5e3cee7f5369f096e5c516b823da9d963e6b17af9378f245a8a3bd->leave($__internal_e36b0dd5dd5e3cee7f5369f096e5c516b823da9d963e6b17af9378f245a8a3bd_prof);

        
        $__internal_3c404f2a01588eda1c305719c2f15e1aa0911cf606f5382fb3209041557c11c3->leave($__internal_3c404f2a01588eda1c305719c2f15e1aa0911cf606f5382fb3209041557c11c3_prof);

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
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
