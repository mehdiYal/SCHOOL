<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e9ac38b7306a7d7484e19ed89942426ccc3f2fe0f809561b7fb2d78d54e463f9 extends Twig_Template
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
        $__internal_48ca84b14957ec338161bf5c7af676669b6f0f927a9e01ced110e7daf6f5e99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ca84b14957ec338161bf5c7af676669b6f0f927a9e01ced110e7daf6f5e99e->enter($__internal_48ca84b14957ec338161bf5c7af676669b6f0f927a9e01ced110e7daf6f5e99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f458c8b0edb714bc3f0b1ef21865af62696518d44a609b5edbd1d765f3df0909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f458c8b0edb714bc3f0b1ef21865af62696518d44a609b5edbd1d765f3df0909->enter($__internal_f458c8b0edb714bc3f0b1ef21865af62696518d44a609b5edbd1d765f3df0909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_48ca84b14957ec338161bf5c7af676669b6f0f927a9e01ced110e7daf6f5e99e->leave($__internal_48ca84b14957ec338161bf5c7af676669b6f0f927a9e01ced110e7daf6f5e99e_prof);

        
        $__internal_f458c8b0edb714bc3f0b1ef21865af62696518d44a609b5edbd1d765f3df0909->leave($__internal_f458c8b0edb714bc3f0b1ef21865af62696518d44a609b5edbd1d765f3df0909_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
