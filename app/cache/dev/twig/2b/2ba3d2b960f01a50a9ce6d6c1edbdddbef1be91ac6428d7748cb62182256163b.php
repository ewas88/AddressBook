<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_23d9669fa947d8cbb1a9a0331ce11bc9ae72f47d0e46a5fd11521db0ab76d525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd5e3f07a56b634bf0a5992ff8d1d3c3ee9887e07713f7d8599a3f3ce3fb3b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5e3f07a56b634bf0a5992ff8d1d3c3ee9887e07713f7d8599a3f3ce3fb3b73->enter($__internal_cd5e3f07a56b634bf0a5992ff8d1d3c3ee9887e07713f7d8599a3f3ce3fb3b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5e3f07a56b634bf0a5992ff8d1d3c3ee9887e07713f7d8599a3f3ce3fb3b73->leave($__internal_cd5e3f07a56b634bf0a5992ff8d1d3c3ee9887e07713f7d8599a3f3ce3fb3b73_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0082ffe6e255f6fc4c4b12a861c601695e74811bc3bfd588f1bd63cef32a69d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0082ffe6e255f6fc4c4b12a861c601695e74811bc3bfd588f1bd63cef32a69d8->enter($__internal_0082ffe6e255f6fc4c4b12a861c601695e74811bc3bfd588f1bd63cef32a69d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0082ffe6e255f6fc4c4b12a861c601695e74811bc3bfd588f1bd63cef32a69d8->leave($__internal_0082ffe6e255f6fc4c4b12a861c601695e74811bc3bfd588f1bd63cef32a69d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
