<?php

/* AddressBookBundle:Person:showAll.html.twig */
class __TwigTemplate_6167da754fa77ba3186e90c2dd1a9bd2f6f404b0f54fcc7882297843cf432147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:showAll.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17d5244dcd719d934202cbdabf588ffe6bc6610fce06e72fa912477e531861b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d5244dcd719d934202cbdabf588ffe6bc6610fce06e72fa912477e531861b3->enter($__internal_17d5244dcd719d934202cbdabf588ffe6bc6610fce06e72fa912477e531861b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d5244dcd719d934202cbdabf588ffe6bc6610fce06e72fa912477e531861b3->leave($__internal_17d5244dcd719d934202cbdabf588ffe6bc6610fce06e72fa912477e531861b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47282e1e992e644bc7d1099ac2bea5c23175a68b65f7c7f24e80cda098514a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47282e1e992e644bc7d1099ac2bea5c23175a68b65f7c7f24e80cda098514a9b->enter($__internal_47282e1e992e644bc7d1099ac2bea5c23175a68b65f7c7f24e80cda098514a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "All people";
        echo " ";
        
        $__internal_47282e1e992e644bc7d1099ac2bea5c23175a68b65f7c7f24e80cda098514a9b->leave($__internal_47282e1e992e644bc7d1099ac2bea5c23175a68b65f7c7f24e80cda098514a9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_be603411d31349553e71c515a4d2351bb28c8d03f6e68d6147f16e0f786e2e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be603411d31349553e71c515a4d2351bb28c8d03f6e68d6147f16e0f786e2e69->enter($__internal_be603411d31349553e71c515a4d2351bb28c8d03f6e68d6147f16e0f786e2e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"/new\" style=\"font-size:20px\"
       class=\" w3-button w3-black w3-display-topright w3-padding-32 ex4\">Add new person</a>
    <h3 class=\"w3-container w3-grey\">ALL CONTACTS</h3>
    <div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 11
            echo "            <p>
                <a href=\"/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo " &nbsp
                <a href=\"/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "/modify\" class=\"w3-button w3-black w3-hover-green w3-padding-small\">Modify</a>
                <a href=\"/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "/delete\" class=\"w3-button w3-black w3-hover-red w3-padding-small\">Remove</a>
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>

";
        
        $__internal_be603411d31349553e71c515a4d2351bb28c8d03f6e68d6147f16e0f786e2e69->leave($__internal_be603411d31349553e71c515a4d2351bb28c8d03f6e68d6147f16e0f786e2e69_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  80 => 14,  76 => 13,  68 => 12,  65 => 11,  61 => 10,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} {{ 'All people' }} {% endblock %}

{% block body %}
    <a href=\"/new\" style=\"font-size:20px\"
       class=\" w3-button w3-black w3-display-topright w3-padding-32 ex4\">Add new person</a>
    <h3 class=\"w3-container w3-grey\">ALL CONTACTS</h3>
    <div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
        {% for person in persons %}
            <p>
                <a href=\"/{{ person.id }}\">{{ person.name }}</a> {{ person.surname }} &nbsp
                <a href=\"/{{ person.id }}/modify\" class=\"w3-button w3-black w3-hover-green w3-padding-small\">Modify</a>
                <a href=\"/{{ person.id }}/delete\" class=\"w3-button w3-black w3-hover-red w3-padding-small\">Remove</a>
            </p>
        {% endfor %}
    </div>

{% endblock %}", "AddressBookBundle:Person:showAll.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Person/showAll.html.twig");
    }
}
