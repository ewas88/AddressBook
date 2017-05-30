<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ea2dc22fcb9b6c8807d70f4d17751f3cb17e05fffef5bd87d20fe20cf13d0a88 extends Twig_Template
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
        $__internal_cbb0f5fb9c3b30d0f0b6b02ca4e10cea948482ece4e0599f359fe084dd274e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb0f5fb9c3b30d0f0b6b02ca4e10cea948482ece4e0599f359fe084dd274e2d->enter($__internal_cbb0f5fb9c3b30d0f0b6b02ca4e10cea948482ece4e0599f359fe084dd274e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_cbb0f5fb9c3b30d0f0b6b02ca4e10cea948482ece4e0599f359fe084dd274e2d->leave($__internal_cbb0f5fb9c3b30d0f0b6b02ca4e10cea948482ece4e0599f359fe084dd274e2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
