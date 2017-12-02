<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_842e6c4d022a7eb949912fec4de4190efa0155790b12f34cefa0778e8c32896a extends Twig_Template
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
        $__internal_b47c91b31e8cc627dde3e467e1fc2b720bc2aa4e82c6d0b9461bad1efc4ae6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47c91b31e8cc627dde3e467e1fc2b720bc2aa4e82c6d0b9461bad1efc4ae6ff->enter($__internal_b47c91b31e8cc627dde3e467e1fc2b720bc2aa4e82c6d0b9461bad1efc4ae6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_ef8fe3a2fe8c37ee62f444d932ab84f8ae28f8a3d18034fce9b26a895924fbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8fe3a2fe8c37ee62f444d932ab84f8ae28f8a3d18034fce9b26a895924fbd4->enter($__internal_ef8fe3a2fe8c37ee62f444d932ab84f8ae28f8a3d18034fce9b26a895924fbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_b47c91b31e8cc627dde3e467e1fc2b720bc2aa4e82c6d0b9461bad1efc4ae6ff->leave($__internal_b47c91b31e8cc627dde3e467e1fc2b720bc2aa4e82c6d0b9461bad1efc4ae6ff_prof);

        
        $__internal_ef8fe3a2fe8c37ee62f444d932ab84f8ae28f8a3d18034fce9b26a895924fbd4->leave($__internal_ef8fe3a2fe8c37ee62f444d932ab84f8ae28f8a3d18034fce9b26a895924fbd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
