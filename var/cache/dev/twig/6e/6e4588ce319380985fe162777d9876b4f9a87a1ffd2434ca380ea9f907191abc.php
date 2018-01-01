<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_dea64690b8c3aeff01d423bcb78ca96dd06269f6a1cd2a788b71ac0f7f92e038 extends Twig_Template
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
        $__internal_109844203e90a5e90ff724524c888dfd757e10631339d0e0789f5b14e4b749c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109844203e90a5e90ff724524c888dfd757e10631339d0e0789f5b14e4b749c6->enter($__internal_109844203e90a5e90ff724524c888dfd757e10631339d0e0789f5b14e4b749c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7f950c73a38cacca9a436e8a2cba3deb2296ded5f8c6cb86e3551ccda0682b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f950c73a38cacca9a436e8a2cba3deb2296ded5f8c6cb86e3551ccda0682b62->enter($__internal_7f950c73a38cacca9a436e8a2cba3deb2296ded5f8c6cb86e3551ccda0682b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_109844203e90a5e90ff724524c888dfd757e10631339d0e0789f5b14e4b749c6->leave($__internal_109844203e90a5e90ff724524c888dfd757e10631339d0e0789f5b14e4b749c6_prof);

        
        $__internal_7f950c73a38cacca9a436e8a2cba3deb2296ded5f8c6cb86e3551ccda0682b62->leave($__internal_7f950c73a38cacca9a436e8a2cba3deb2296ded5f8c6cb86e3551ccda0682b62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
